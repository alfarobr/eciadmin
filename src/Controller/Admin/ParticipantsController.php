<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;
use Cake\Mailer\MailerAwareTrait;

/**
 * Participants Controller
 *
 * @property \App\Model\Table\ParticipantsTable $Participants
 */
class ParticipantsController extends AppController
{

    public function isAuthorized($user)
    {
        if (isset($user['role']) and $user['role'] === 'user') {
            if (in_array($this->request->action, ['index'])) {
                return true;
            }
        }
        
        return parent::isAuthorized($user);
    }

    public function index()
    {
        $this->paginate = [
            'limit' => 15,
            'contain' => ['Countries']
        ];
        $participants = $this->paginate($this->Participants);

        $this->set(compact('participants'));
        $this->set('_serialize', ['participants']);
    }

    public function view($id = null)
    {
        $participant = $this->Participants->get($id, [
            'contain' => ['Countries']
        ]);

        $this->set('participant', $participant);
        $this->set('_serialize', ['participant']);
    }

    use MailerAwareTrait;
    public function add()
    {
        $participant = $this->Participants->newEntity();
        if ($this->request->is('post')) {
            $participant = $this->Participants->patchEntity($participant, $this->request->data);
            if ($this->Participants->save($participant)) {

                $this->getMailer('Participant')->send('welcome', [$participant]); //Envía mail.

                $this->Flash->success(__('El participante se ha regitrado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El participante no se ha registrado, inténtelo nuevamente.'));
        }
        $countries = $this->Participants->Countries->find('list', ['order' => ['Countries.name' => 'ASC']]);
        $this->set(compact('participant', 'countries'));
        $this->set('_serialize', ['participant']);
    }

    public function edit($id = null)
    {
        $participant = $this->Participants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participant = $this->Participants->patchEntity($participant, $this->request->data);
            if ($this->Participants->save($participant)) {
                $this->Flash->success(__('El participante se ha actualizado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El participante no se ha actualizado, intentelo nuevamente.'));
        }
		$this->set('participant', $participant);
        $countries = $this->Participants->Countries->find('list', ['order' => ['Countries.name' => 'ASC']]);
        $this->set(compact('participant', 'countries'));
        $this->set('_serialize', ['participant']);
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participant = $this->Participants->get($id);
        if ($this->Participants->delete($participant)) {
            $this->Flash->success(__('El participante se ha eliminado correctamente.'));
        } else {
            $this->Flash->error(__('El participante no se ha eliminado, inténtelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function export(){
        
        $participants = $this->Participants->find('all')->contain(['Countries'])->toArray();
        $this->set(compact('participants'));
        $this->viewBuilder()->layout('ajax');
        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }

    public function updateActive()
    {
        
        if ($this->request->is('ajax')) {
            
            $id = $this->request->query['id'];
            $active = $this->request->query['active'];
            
            $participants = TableRegistry::get('Participants');
            $query = $participants->query();
            $query->update()
                ->set(['active' => $active])
                ->where(['id' => $id])
                ->execute();
        }
        $this->autoRender = false;
        
    }
}
