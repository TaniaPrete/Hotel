<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;

    public function __construct($applicationData)
    {
        $this->applicationData = $applicationData;
    }

    public function build()
    {
        $mail = $this->subject('Candidatura ricevuta per la posizione: ' . $this->applicationData['position'])
                     ->view('emails.job_application')
                     ->with([
                         'name' => $this->applicationData['name'],
                         'email' => $this->applicationData['email'],
                         'position' => $this->applicationData['position'],
                         'message' => (string) ($this->applicationData['message'] ?? ''), // Conversione a stringa
                         'cv_path' => $this->applicationData['cv_path'], // Passa il percorso alla vista
                     ]);

        // Aggiungi allegato solo se il percorso del CV è presente
        if (!empty($this->applicationData['cv_path'])) {
            $mail->attach(storage_path('app/' . $this->applicationData['cv_path']));
        }

        return $mail;
    }
}

