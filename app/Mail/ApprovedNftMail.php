<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApprovedNftMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from NFtChronicles')
            ->view('emails.approved');
        //            ->text('mails.demo_plain')
//            ->with(
//                [
//                    'testVarOne' => '1',
//                    'testVarTwo' => '2',
//                ])
//            ->attach(public_path('/images').'/demo.jpg', [
//                'as' => 'demo.jpg',
//                'mime' => 'image/jpeg',
//            ]);

    }
}
