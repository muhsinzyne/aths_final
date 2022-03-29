<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Students;
use Exception;
use Shuchkin\SimpleXLSXGen;
use Illuminate\Support\Facades\Log;

class GenerateExamIpReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:exam-report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->generateReport();
    }

    public function generateReport()
    {
        Log::channel('stderr')->info('Started...');

        $date               = date('Y_m_d_h_i_s');

        $savePath = storage_path() . '/app/public/output/' . $date . '/';

        try {
            mkdir($savePath, 0777, true);
        } catch (Exception $e) {
            Log::channel('stderr')->info('Could not create a directory ' . $savePath);
        }

        $fileCount          = 1;
        $excelFormatHeader  = [
            'Student ID',
            'Student Name',
            'Student Name AR',
            'Status',
            'Platform',
            'User Agent',
            'IP Address',
            'Area ID',
            'Area Name',
            'Group Name',
            'Exam ID',
            'Exam Name'
        ];

        $exportResponse   = [];
        $exportResponse[] = $excelFormatHeader;

        $dir = storage_path() . '/app/public/data/';
        if ($handle = opendir($dir)) {
            while (false !== ($fileName = readdir($handle))) {
                if (in_array($fileName, ['.', '..'])) {
                    continue;
                }

                $examResponse  = (object) [
                    'examId'    => null,
                    'examName'  => null,
                    'timeStamp' => null,
                ];

                $examId                 = str_replace('.json', '', $fileName);
                $fullFileName           = $dir . $fileName;
                $string                 = file_get_contents($fullFileName);
                $jsonObj                = (object) json_decode($string, true);
                $examData               = (object) $jsonObj->data;
                $examResponse->examId   =$examData->ExamID;
                $examResponse->examName = $examData->ExamName;
                $examResponse->timeStamp= $examData->Timestamp;

                // looping though the school data
                foreach ($examData->Areas as $key => $area) {
                    $areaResponse = (object) [
                        'areaId'    => $area['AreaID'],
                        'areaName'  => $area['AreaName'],
                    ];

                    // looping through group
                    foreach ($area['Groups'] as $groupKey => $group) {
                        $groupResponse = (object) [
                            'groupName' => $group['GroupName'],
                        ];

                        $studentLength  = count($group['Examinees']);
                        foreach ($group['Examinees'] as $examinieeKey => $student) {
                            $userName                = $student['UserName'];
                            $userName                = str_replace('_', '', $userName);
                            list($alpha, $studentId) = sscanf($userName, '%[a-z]%d');
                            if ($studentId == null) {
                                $studentId = 00;
                            }
                            $studentInfo             = Students::where('student_id', $studentId)->first();

                            if (!$studentInfo) {
                                Log::channel('stderr')->info('Could not get student Info for student for username: ' . $student['UserName']);
                            } else {
                                $studentResponse = (object) [
                                    'studentId'     => $studentId,
                                    'studentName'   => $studentInfo->Student_Name,
                                    'studentNameAr' => $studentInfo->Student_Name_AR,
                                    'status'        => $student['Status'],
                                    'platform'      => $student['Platform'],
                                    'userAgent'     => $student['UserAgent'],
                                    'ips'           => implode(',', $student['IPs'] ?? []),

                                ];
                                $exportResponse[] = [
                                    $studentResponse->studentId,
                                    $studentResponse->studentName,
                                    $studentResponse->studentNameAr,
                                    $studentResponse->status,
                                    $studentResponse->platform,
                                    $studentResponse->userAgent,
                                    $studentResponse->ips,
                                    $areaResponse->areaId,
                                    $areaResponse->areaName,
                                    $groupResponse->groupName,
                                    $examResponse->examId,
                                    $examResponse->examName,

                                ];
                                //Log::channel('stderr')->info('Exported Completed ' . ($examinieeKey + 1) . '/' . $studentLength);
                            }
                        }
                    }
                }
                $examFileName =  $examResponse->examId . '_' . $examResponse->examName . '_' . $examResponse->timeStamp . '.xlsx';

                $fileCount++;
            }
            closedir($handle);
        }
        $totalList    = count($exportResponse) - 1;
        //$xlsx->downloadAs($examFileName);
        $xlsx         = SimpleXLSXGen::fromArray($exportResponse);
        $fileName     = 'generated' . '.xlsx';
        $xlsx->saveAs($savePath . $examFileName);
        Log::channel('stderr')->info('Generated Export ' . $totalList . 'students records file: no  ' . $fileCount . ' ' . $fileName);

        Log::channel('stderr')->info('Completed!...');
    }
}
