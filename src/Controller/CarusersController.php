<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Carusers Controller
 *
 * @property \App\Model\Table\CarusersTable $Carusers
 * @method \App\Model\Entity\Caruser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarusersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function index()
    {
        $this->Status->isUser();
        $carusers = $this->paginate($this->Carusers);

        $this->set(compact('carusers'));
    }

    public function login()
    {
        $this->request->allowMethod(['post', 'get']);
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            $this->request->getSession()->write(['identity' => $this->request->getAttribute('identity')]);
            $this->redirect($this->Status->checkStatus());
        }else if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid Username or Password.'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id Caruser id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Status->isUser();
        $caruser = $this->Carusers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('caruser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        // $this->Status->isUser();
        $caruser = $this->Carusers->newEmptyEntity();
        if ($this->request->is('post')) {
            $caruser = $this->Carusers->patchEntity($caruser, $this->request->getData());
            // debug($caruser);dd();
            if ($this->Carusers->save($caruser)) {
                $this->Flash->success(__('The caruser has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The caruser could not be saved. Please, try again.'));
        }
        $this->set(compact('caruser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Caruser id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Status->isUser();
        $caruser = $this->Carusers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caruser = $this->Carusers->patchEntity($caruser, $this->request->getData());
            if ($this->Carusers->save($caruser)) {
                $this->Flash->success(__('The caruser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caruser could not be saved. Please, try again.'));
        }
        $this->set(compact('caruser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Caruser id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Status->isUser();
        $this->request->allowMethod(['post', 'delete']);
        $caruser = $this->Carusers->get($id);
        if ($this->Carusers->delete($caruser)) {
            $this->Flash->success(__('The caruser has been deleted.'));
        } else {
            $this->Flash->error(__('The caruser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Carusers', 'action' => 'login']);
        }
    }
}
