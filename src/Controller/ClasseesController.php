<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Classees Controller
 *
 * @property \App\Model\Table\ClasseesTable $Classees
 */
class ClasseesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $classees = $this->paginate($this->Classees, ['limit' => 1000]);

        $this->set(compact('classees'));
        $this->set('_serialize', ['classees']);
    }

    /**
     * View method
     *
     * @param string|null $id Classee id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classee = $this->Classees->get($id, [
            'contain' => []
        ]);

        $this->set('classee', $classee);
        $this->set('_serialize', ['classee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classee = $this->Classees->newEntity();
        if ($this->request->is('post')) {
            $classee = $this->Classees->patchEntity($classee, $this->request->getData());
            if ($this->Classees->save($classee)) {
                $this->Flash->success(__('The classee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classee could not be saved. Please, try again.'));
        }
        $this->set(compact('classee'));
        $this->set('_serialize', ['classee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Classee id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classee = $this->Classees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classee = $this->Classees->patchEntity($classee, $this->request->getData());
            if ($this->Classees->save($classee)) {
                $this->Flash->success(__('The classee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classee could not be saved. Please, try again.'));
        }
        $this->set(compact('classee'));
        $this->set('_serialize', ['classee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Classee id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classee = $this->Classees->get($id);
        if ($this->Classees->delete($classee)) {
            $this->Flash->success(__('The classee has been deleted.'));
        } else {
            $this->Flash->error(__('The classee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
