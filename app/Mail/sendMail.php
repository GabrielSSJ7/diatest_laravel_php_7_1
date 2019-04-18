<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $subject;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $subject, $name, $sobrenome, $email, $empresa, $telefone, $estado, $cidade, $text)
    {
        $this->title = $title;
        $this->subject = $subject;
        $this->name = $name;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->empresa = $empresa;
        $this->telefone = $telefone;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->text = $text;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('gabriel@webpeople.net.br')
            ->view('mail.contato')
            ->subject($this->subject)
            ->with([
                'title' => $this->subject,
                'text' => $this->text,
                'name' => $this->name,
                'sobrenome' => $this->sobrenome,
                'email' => $this->email,
                'empresa' => $this->empresa,
                'telefone' => $this->telefone,
                'estado' => $this->estado,
                'cidade' => $this->cidade,
            ]);
    }
}
