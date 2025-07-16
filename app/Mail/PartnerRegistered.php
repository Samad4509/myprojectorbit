<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\PartnerRegister;

class PartnerRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $partner;

    public function __construct(PartnerRegister $partner)
    {
        $this->partner = $partner;
    }

    public function build()
    {
        return $this->subject('New Partner Registration')
                    ->view('mail.partner_registered');
    }
    
}
