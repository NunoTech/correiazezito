<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $dados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->dados = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to('alberttojrfsa@gmail.com');
        $this->from($this->dados['email'], $this->dados['name']);
        $this->subject($this->dados['subject']);
        $this->replyTo($this->dados['email'], $this->dados['name']);

        return $this->view('pages.email.contato_site', [
            'name' => $this->dados['name'],
            'suject' => $this->dados['subject'],
            'message' => $this->dados['message'],
        ]);
    }
}
