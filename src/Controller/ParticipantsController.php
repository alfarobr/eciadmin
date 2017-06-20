<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

/**
 * Participants Controller
 *
 * @property \App\Model\Table\ParticipantsTable $Participants
 */
class ParticipantsController extends AppController
{

    use MailerAwareTrait;
    public function add()
    {
        $participant = $this->Participants->newEntity();
        if ($this->request->is('post')) {
            $participant = $this->Participants->patchEntity($participant, $this->request->data);
            
			if ($this->Participants->save($participant)) {

                $this->getMailer('Participant')->send('welcome', [$participant]); //Envía mail.
                
				$this->Flash->success(__('Los datos se han regitrado correctamente.'));

                return $this->redirect(['action' => 'confirmar-registro', $participant->id, ]);
            }
            $this->Flash->error(__('Los datos no se han registrado, inténtelo nuevamente.'));
        }
        $countries = $this->Participants->Countries->find('list', ['order' => ['Countries.name' => 'ASC']]);
        $this->set(compact('participant', 'countries'));
        $this->set('_serialize', ['participant']);
		
		$this->viewBuilder()->layout('default-clear');
    }
	
	public function confirmaRregistro($id = null){
		$participant = $this->Participants->get($id, [
            'contain' => ['Countries']
        ]);

        $this->set('participant', $participant);
		
		$this->viewBuilder()->layout('default-clear');
	}

}
