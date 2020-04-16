<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BantuanEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@dolanyo.com')
        ->view('bantuanemail')

        ->with([
            'id' => $this->data['id'],
            'nama' => $this->data['nama'],
            'email' => $this->data['email'],
            'pertanyaan' => $this->data['pertanyaan'],
            'jawaban' => $this->data['jawaban'],
            'waktu' => $this->data['waktu'],
            ]);

    }
}
