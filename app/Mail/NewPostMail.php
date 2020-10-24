<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostMail extends Mailable
{
    use Queueable, SerializesModels;

    public $bag;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bag)
    {
        $this->bag = $bag;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('blog@news.it')->subject('Nuovo Post')->view('post.mail.newpost');
    }
}
