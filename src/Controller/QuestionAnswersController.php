<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * QuestionAnswers Controller
 *
 * @property \App\Model\Table\QuestionAnswersTable $QuestionAnswers
 */
class QuestionAnswersController extends AppController
{

    function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->set('questions', $this->QuestionAnswers->Questions->find('list', array('fields' =>array('id','text'))));
        $this->set('answers', $this->QuestionAnswers->Answers->find('list', array('fields' =>array('id','text'))));
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $questionAnswers = $this->paginate($this->QuestionAnswers, ['limit' => 1000]);

        $this->set(compact('questionAnswers'));
        $this->set('_serialize', ['questionAnswers']);
    }

    public function question($id = null)
    {
        $questionAnswers = $this->paginate($this->QuestionAnswers->find('all')->where(['questionId' => $id]), ['limit' => 1000]);
        $this->set('questionId', $id);

        $this->set(compact('questionAnswers'));
        $this->set('_serialize', ['questionAnswers']);
    }

    /**
     * View method
     *
     * @param string|null $id Question Answer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionAnswer = $this->QuestionAnswers->get($id, [
            'contain' => []
        ]);

        $this->set('questionAnswer', $questionAnswer);
        $this->set('_serialize', ['questionAnswer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionAnswer = $this->QuestionAnswers->newEntity();
        if ($this->request->is('post')) {
            $questionAnswer = $this->QuestionAnswers->patchEntity($questionAnswer, $this->request->getData());
            if ($this->QuestionAnswers->save($questionAnswer)) {
                $this->Flash->success(__('The question answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question answer could not be saved. Please, try again.'));
        }
        $this->set(compact('questionAnswer'));
        $this->set('_serialize', ['questionAnswer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Question Answer id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionAnswer = $this->QuestionAnswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionAnswer = $this->QuestionAnswers->patchEntity($questionAnswer, $this->request->getData());
            if ($this->QuestionAnswers->save($questionAnswer)) {
                $this->Flash->success(__('The question answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question answer could not be saved. Please, try again.'));
        }
        $this->set(compact('questionAnswer'));
        $this->set('_serialize', ['questionAnswer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Question Answer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionAnswer = $this->QuestionAnswers->get($id);
        if ($this->QuestionAnswers->delete($questionAnswer)) {
            $this->Flash->success(__('The question answer has been deleted.'));
        } else {
            $this->Flash->error(__('The question answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
