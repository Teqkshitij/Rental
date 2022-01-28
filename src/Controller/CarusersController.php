<?php

declare(strict_types=1);

namespace App\Controller;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;
use Cake\Mailer\Email;

use Cake\Mailer\Mailer;
use Cake\Datasource\ConnectionManager;


/**
 * Carusers Controller
 *
 * @property \App\Model\Table\CarusersTable $Carusers
 * @method \App\Model\Entity\Caruser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarusersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->connection = ConnectionManager::get('default');
    }

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
        $this->Authentication->addUnauthenticatedActions(['login', 'add', 'forgotpassword', 'resetpassword','sendMail']);
    }

    public function index()
    {
        $this->Status->isUser();
        $carusers = $this->paginate($this->Carusers);

        $this->set(compact('carusers'));
    }

    public function forgotpassword()
    {
        if ($this->request->is('post')) {
            $email =   $this->request->getData();
            $hello = $this->Carusers->find('All')->where(['email' => implode($email)])->toList();
            //    dd($hello);
            if (!empty($hello)) {
                $token = rand(111111, 999999);
                $data = $this->connection->update(
                    "carusers",
                    ["token" => $token],
                    ["email" => implode($email)]
                );
                if ($data) {
                    $this->redirect(['action' => 'sendMail', $token]);
                }
            } else {
                return $this->Flash->error("The given email is not registred");
            }
        }
    }



    // if($this->request->is('post')){
    //     $myemail= $this->request->getData('email');
    //     $mytoken= Security::hash(Security::randomBytes(25));

    //     $usertable= TableRegistry::get('Carusers');
    //     $user=$usertable->find('all')->where(['email'=>$myemail])->first();
    //     $user->password= '';
    //     $user->token=$mytoken;
    //     if($usertable->save($user)){
    //         $this->Flash->success('Reset password link sent to your email('.$myemail.'). Please check your inbox.');

    //         Email::configTransport('mailtrap', [
    //             'host' => 'smtp.mailtrap.io',
    //             'port' => 2525,
    //             'username' => 'e20d3977e70f7f',
    //             'password' => 'fbf641c19e1788',
    //             'className' => 'Smtp'
    //           ]);

    //           $email = new Email('default');
    //           $email->transport('mailtrap');
    //           $email->emailFormat('html');
    //           $email->from('skshitij47@gmail.com', 'Royalty Cars');
    //           $email->subject('Please confirm reset password');
    //           $email->to($myemail);
    //           $email->send('Hello '.$myemail.'<br/> Please click link below to reset password<br/><br/><a href="http://localhost:8765/Carusers/resetpassword/ '.$mytoken.'">Reset Password</a>');
    //         }

    // }



    public function sendMail($token = null)
    {
        // $email = $this->Caruser->findById($id)->contain(['Caruser'])->firstOrFail();
        // $myemail = $this->request->getData('email');
        $message = "Your one time password is  $token  ";
        $mailer = new Mailer();
        $mailer->setTransport('mail');
        $mailer->setFrom(['skshitij47@gmail.com' => 'Royalty Cars'])
            ->setTo('kshitijsharma0338@yahoo.com')
            ->setSubject('Password Reset')
            ->deliver($message);
        return $this->redirect(['action' => 'resetpassword']);
    }

    public function resetpassword()
    {
        if ($this->request->is('post')) {
            $user = $this->request->getData();

            $token =  $user['token'];
            $password =  $user['password'];

            $hasher = new DefaultPasswordHasher();
            $password = $hasher->hash($password);
            // dd($password);
            $data = $this->connection->update(
                "carusers",
                ["password" => $password],
                ["token" => $token]
            );
            if ($data) {

                $this->Flash->success("The Password has been updated");
                return $this->redirect(['action' => 'login']);
            }

            // dd($token, $password);

        }
    }
    public function login()
    {
        $this->request->allowMethod(['post', 'get']);
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            $this->request->getSession()->write(['identity' => $this->request->getAttribute('identity')]);
            $this->redirect($this->Status->checkStatus());
        } else if ($this->request->is('post') && !$result->isValid()) {
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
