<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionChoices Controller
 *
 * @property \App\Model\Table\QuestionChoicesTable $QuestionChoices
 */
class QuestionChoicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $questionChoices = $this->paginate($this->QuestionChoices);

        $this->set(compact('questionChoices'));
        $this->set('_serialize', ['questionChoices']);
    }

    /**
     * View method
     *
     * @param string|null $id Question Choice id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionChoice = $this->QuestionChoices->get($id, [
            'contain' => []
        ]);

        $this->set('questionChoice', $questionChoice);
        $this->set('_serialize', ['questionChoice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionChoice = $this->QuestionChoices->newEntity();
        if ($this->request->is('post')) {
            $questionChoice = $this->QuestionChoices->patchEntity($questionChoice, $this->request->getData());
            if ($this->QuestionChoices->save($questionChoice)) {
                $this->Flash->success(__('The question choice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question choice could not be saved. Please, try again.'));
        }
        $this->set(compact('questionChoice'));
        $this->set('_serialize', ['questionChoice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Question Choice id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionChoice = $this->QuestionChoices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionChoice = $this->QuestionChoices->patchEntity($questionChoice, $this->request->getData());
            if ($this->QuestionChoices->save($questionChoice)) {
                $this->Flash->success(__('The question choice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question choice could not be saved. Please, try again.'));
        }
        $this->set(compact('questionChoice'));
        $this->set('_serialize', ['questionChoice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Question Choice id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionChoice = $this->QuestionChoices->get($id);
        if ($this->QuestionChoices->delete($questionChoice)) {
            $this->Flash->success(__('The question choice has been deleted.'));
        } else {
            $this->Flash->error(__('The question choice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
