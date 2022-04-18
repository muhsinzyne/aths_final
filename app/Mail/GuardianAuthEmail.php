<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Guardian;

class GuardianAuthEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $guardian;
    protected $otp;
    protected $authLink;
    protected $validity;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($guardian, $otp, $authLink, $validity)
    {
        $this->guardian = $guardian;
        $this->otp      = $otp;
        $this->authLink = $authLink;
        $this->validity = $validity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->from('communicator@aths.ac.ae', 'ATHS Communicator')
            ->subject('ATHS Communicator Mobile App')
            ->markdown('mails.userauth')
            ->with([
                'name'     => $this->guardian->name_en,
                'otp'      => $this->otp,
                'link'     => $this->authLink,
                'validity' => $this->validity
            ]);
    }
}
