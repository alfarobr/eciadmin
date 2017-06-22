<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Participant mailer.
 */
class ParticipantMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Participant';

     public function welcome($participant)
    {
        $this->to($participant->email)
        ->profile('ecimail')
        ->emailFormat('html')
        ->template('ecimail_template')
        ->layout('participant')
        ->viewVars(['grade' => $participant->grade, 'first_name' => $participant->first_name, 'last_name' => $participant->last_name])
        ->subject(sprintf('!' . $participant->first_name . ', gracias por registrarte en el IX ECI - Invierno 2017!'));
    }
}
