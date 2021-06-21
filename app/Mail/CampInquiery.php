<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CampInquiery extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $campInquiryData;

    public function __construct($campInquiryData)
    {
        $this->campInquiryData = $campInquiryData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Camp Inquiry')
                ->view('email-templates.camp_inquiry', ['campInquiryData' => $this->campInquiryData]);
    }
}
