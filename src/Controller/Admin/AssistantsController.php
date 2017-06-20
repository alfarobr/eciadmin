<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Assistants Controller
 *
 * @property \App\Model\Table\AssistantsTable $Assistants
 */
class AssistantsController extends AppController
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
        $assistants = $this->paginate($this->Assistants);

        $this->set(compact('assistants'));
        $this->set('_serialize', ['assistants']);
    }

    /**
     * View method
     *
     * @param string|null $id Assistant id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assistant = $this->Assistants->get($id, [
            'contain' => ['Countries']
        ]);

        $this->set('assistant', $assistant);
        $this->set('_serialize', ['assistant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assistant = $this->Assistants->newEntity();
        if ($this->request->is('post')) {
            $assistant = $this->Assistants->patchEntity($assistant, $this->request->data);
            if ($this->Assistants->save($assistant)) {
                $this->Flash->success(__('El asistente se ha registrado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El asistente no se ha registrado, inténtelo nuevamente.'));
        }
        $countries = $this->Assistants->Countries->find('list', ['limit' => 200]);
        $this->set(compact('assistant', 'countries'));
        $this->set('_serialize', ['assistant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Assistant id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assistant = $this->Assistants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assistant = $this->Assistants->patchEntity($assistant, $this->request->data);
            if ($this->Assistants->save($assistant)) {
                $this->Flash->success(__('El asistente se ha actualizado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El asistente no se ha actualizado, inténtelo de nuevamente.'));
        }
        $countries = $this->Assistants->Countries->find('list', ['limit' => 200]);
        $this->set(compact('assistant', 'countries'));
        $this->set('_serialize', ['assistant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Assistant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assistant = $this->Assistants->get($id);
        if ($this->Assistants->delete($assistant)) {
            $this->Flash->success(__('El asistente se ha eliminado correctamente.'));
        } else {
            $this->Flash->error(__('El asistente no se ha eliminado, intentelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /*
    public function export() {
		$this->response->download('export.csv');
		$data = $this->Assistants->find('all')->toArray();
		$_serialize = 'data';
        $_header = ['ID', 'NOMBRES', 'APELLIDOS', 'CORREO', 'TELEFONO', 'CENTRO', 'NACIONALIDAD', 'CREATED', 'UPDATED', 'ACTIVE'];
   		$this->set(compact('data', '_serialize', '_header'));
		$this->viewBuilder()->className('CsvView.Csv');
		return;
	}
    */

    public function export()
     {
        
        $assistants = $this->Assistants->find('all')->contain(['Countries'])->toArray();
        $this->set(compact('assistants'));
        $this->viewBuilder()->layout('ajax');
        $this->response->type('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }

    public function updateActive()
    {
        
        if ($this->request->is('ajax')) {
            
            $id = $this->request->query['id'];
            $active = $this->request->query['active'];
            
            $assistants = TableRegistry::get('Assistants');
            $query = $assistants->query();
            $query->update()
                ->set(['active' => $active])
                ->where(['id' => $id])
                ->execute();
        }
        $this->autoRender = false;
        
    }

}
