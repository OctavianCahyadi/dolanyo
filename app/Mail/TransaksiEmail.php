<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransaksiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
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
        ->view('transaksiemail')

        ->with([
            'nama' => $this->data['nama'],
            'handphone' => $this->data['handphone'],
            'peserta' => $this->data['peserta'],
            'paket' => $this->data['paket'],
            'email' => $this->data['email'],
            'tanggal' => $this->data['tanggal'],
            'overview' => $this->data['overview'],
            'deskripsi' => $this->data['deskripsi'],
            'idtransaksi' => $this->data['idtransaksi'],
            'harga' => $this->data['harga'],
            'hargapaket' => $this->data['hargapaket'],
            'idpaket' => $this->data['idpaket'],
            'tempat' => $this->data['tempat'],
            ]);

    }
    
}
