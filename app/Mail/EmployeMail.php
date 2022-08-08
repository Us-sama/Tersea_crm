<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmployeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nom_employe;
    public $email_employe;
    public $societe_nom;
    public $invitation_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom_employe,$email_employe,$societe_nom,$invitation_id)
    {
        $this->nom_employe = $nom_employe;
        $this->email_employe = $email_employe;
        $this->societe_nom = $societe_nom;
        $this->invitation_id = $invitation_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.employe');
    }
}
