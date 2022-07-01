<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $info;
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mail@example.com', 'Mailtrap')
            ->subject($this->info['subject'])
            ->markdown('mail.exmpl')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => '/inboxes/',
                'body' => $this->info['body'],
            ]);
        return $this->view('mail.exmpl');
    }
}
