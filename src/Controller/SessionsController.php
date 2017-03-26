<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Database\Type;

/**
 * Sessions Controller
 *
 * @property \App\Model\Table\SessionsTable $Sessions
 */
class SessionsController extends AppController
{

    function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->set('classees', $this->Sessions->Users->Classees->find('list', array('fields' =>array('id','name'))));

        $this->getNextSession();
        //$huhuhu = $this->request->session()->read('Auth.User.username');
        //$this->set('huhuhu', $this->request->session()->read('Auth.User.username'));
        //$this->request->session()->write('Auth.User.toto', 'tot');
        //$this->set('huhuhuhu', $this->request->session()->read('Auth.User.toto'));
    }

    private function getNextSession()
    {
        $connection = ConnectionManager::get('default');
        $nowTime = Time::now();
        $nowTime->addHours(1); //UTC+1
        $nowTimeMinus3 = Time::now();
        $nowTimeMinus3->addHours(1); //UTC+1
        $nowTimeMinus3->subHours(3);
        if ($this->request->session()->read('Auth.User.isTeacher')) {
            $result = $connection->execute('select * from sessions where userId = :userId  && date < :date && date > :dateMinus limit 1', ['userId' => $this->request->session()->read('Auth.User.id'), 'date' => Time::now(), 'dateMinus' => $nowTimeMinus3->i18nFormat('yyyy-MM-dd HH:mm:ss')]);
        } else {
            $result = $connection->execute('select * from sessions where classId = :classId && date < :date && date > :dateMinus limit 1', ['classId' => $this->request->session()->read('Auth.User.classId'), 'date' => $nowTime->i18nFormat('yyyy-MM-dd HH:mm:ss'), 'dateMinus' => $nowTimeMinus3->i18nFormat('yyyy-MM-dd HH:mm:ss')]);
        }
        $this->set('nextSession', $result->fetch('assoc'));
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sessions = $this->paginate($this->Sessions);

        $this->set(compact('sessions'));
        $this->set('_serialize', ['sessions']);
    }

    /**
     * View method
     *
     * @param string|null $id Session id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => []
        ]);

        $this->set('session', $session);
        $this->set('_serialize', ['session']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->Sessions->newEntity();
        if ($this->request->is('post')) {
            $session = $this->Sessions->patchEntity($session, $this->request->getData());
            if ($this->Sessions->save($session)) {
                $this->Flash->success(__('The session has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The session could not be saved. Please, try again.'));
        }
        $this->set(compact('session'));
        $this->set('_serialize', ['session']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Session id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $session = $this->Sessions->patchEntity($session, $this->request->getData());
            if ($this->Sessions->save($session)) {
                $this->Flash->success(__('The session has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The session could not be saved. Please, try again.'));
        }
        $this->set(compact('session'));
        $this->set('_serialize', ['session']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Session id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $session = $this->Sessions->get($id);
        if ($this->Sessions->delete($session)) {
            $this->Flash->success(__('The session has been deleted.'));
        } else {
            $this->Flash->error(__('The session could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Live method
     *
     * @param string|null $id Session id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function live($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => []
        ]);

        $this->set('session', $session);
        $this->set('_serialize', ['session']);
    }
}
