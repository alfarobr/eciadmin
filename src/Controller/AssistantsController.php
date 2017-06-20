<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Assistants Controller
 *
 * @property \App\Model\Table\AssistantsTable $Assistants
 */
class AssistantsController extends AppController
{

    public function add()
    {
        $assistant = $this->Assistants->newEntity();
        if ($this->request->is('post')) {
            $assistant = $this->Assistants->patchEntity($assistant, $this->request->data);
            if ($this->Assistants->save($assistant)) {
                $this->Flash->success(__('Los datos se han enviado correctamente.'));
				
				return $this->redirect(['action' => 'confirmar-registro', $assistant->id, 'prefix' => false]);
            }
            $this->Flash->error(__('Los datos no se han enviado, intentelo nuevamente.'));
        }
        $countries = $this->Assistants->Countries->find('list', ['order' => ['Countries.name' => 'ASC']]);
        $this->set(compact('assistant', 'countries'));
        $this->set('_serialize', ['assistant']);
		
		$this->viewBuilder()->layout('default-clear');
    }
	
	public function confirmaRregistro($id = null){
		$assistant = $this->Assistants->get($id, [
            'contain' => ['Countries']
        ]);

        $this->set('assistant', $assistant);
		
		$this->viewBuilder()->layout('default-clear');
	}

}
