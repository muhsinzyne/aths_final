<?php
namespace App\Http\Controllers\Scrap;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Exception;
use Shuchkin\SimpleXLSXGen;

class StudentExamAuditController extends Controller
{
    public function index()
    {
        $date = date('Y_m_d_h_i_s');

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

        $dir = storage_path() . '/app/public/data/';

        if ($handle = opendir($dir)) {
            while (false !== ($fileName = readdir($handle))) {
                if (in_array($fileName, ['.', '..'])) {
                    continue;
                }

                $exportResponse   = [];
                $exportResponse[] = $excelFormatHeader;

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

                        foreach ($group['Examinees'] as $examinieeKey => $student) {
                            $userName                = $student['UserName'];
                            $userName                = str_replace('_', '', $userName);
                            list($alpha, $studentId) = sscanf($userName, '%[a-z]%d');
                            $studentInfo             = Students::where('student_id', $studentId)->first();

                            // echo '<pre>';
                            // print_r($examResponse);
                            // echo '</pre>';
                            // die();
                            // echo '<pre>';
                            // print_r($student);
                            // echo '</pre>';
                            // die();
                            if (!$studentInfo) {
                                // echo '<pre>';
                                // print_r($student);
                                // echo '</pre>';
                                // die();
                            } else {
                                $studentResponse = (object) [
                                    'studentId'     => $studentId,
                                    'studentName'   => $studentInfo->Student_Name,
                                    'studentNameAr' => $studentInfo->Student_Name_AR,
                                    'status'        => $student['Status'],
                                    'platform'      => $student['Platform'],
                                    'userAgent'     => $student['UserAgent'],
                                    'ips'           => implode(',', $student['IPs']),

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
                            }
                        }
                    }
                }
                $examFileName =  $examResponse->examId . '_' . $examResponse->examName . '_' . $examResponse->timeStamp . '.xlsx';
                $xlsx         = SimpleXLSXGen::fromArray($exportResponse);

                //$xlsx->downloadAs($examFileName);
                $savePath = storage_path() . '/app/public/output/' . $date . '/';

                try {
                    mkdir($savePath, 0777, true);
                } catch (Exception $e) {
                }
                $xlsx->saveAs($savePath . $examFileName);
                //die();

                /**
                * End on exam wise
                *
                *
                */
                //die();
                // exam wise file ends one json file end
            }
            closedir($handle);
        }

        die('completed');
    }
}
