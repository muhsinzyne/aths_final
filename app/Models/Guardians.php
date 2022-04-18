<?php
namespace App\Models;

use App\Helpers\StringHelper;
use App\Mail\GuardianAuthEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Guardians extends Model implements JWTSubject
{
    protected $primaryKey  = 'id';
    protected $table       = 'aths_guardians';
    use HasFactory;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function sendEmailForGuardian()
    {
        $otp = StringHelper::generateOtp();
        if ($this->otp == null) {
            $this->otp              = new GuardianOtp();
            $this->otp->guardian_id = $this->id;
        } else {
            $this->otp->delete();
            $this->otp              = new GuardianOtp();
            $this->otp->guardian_id = $this->id;
        }
        $this->otp->value = $otp;
        $this->otp->save();
        $validityDate = Carbon::now()->addHours(1);
        $validity     = $validityDate->format('l h:i A');
        // Build auth link according to mobile platform.
        $authLink = 'aths://communicator/' . $this->id . "/$otp";
        Mail::to($this->email)->send(new GuardianAuthEmail($this, $otp, $authLink, $validity));
    }

    public function otp()
    {
        return $this->hasOne(GuardianOtp::class, 'guardian_id');
    }
}
