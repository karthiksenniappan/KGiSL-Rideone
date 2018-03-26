<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(Event $event){
        $this->Auth->allow(['signup','add']);
        
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    public function eindex()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    public function eview($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                $this->getMailer('Users')->send('welcome', [$user]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
public function eadd()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                $this->getMailer('Users')->send('welcome', [$user]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function signup()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                $this->getMailer('Users')->send('welcome', [$user]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login()
    {
        if ($this->request->is('post')) {
            if($this->Auth->user('id')){
                
                return $this->redirect(['action'=>'logout']);

        }else{
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $conn = ConnectionManager::get('default');
                $usermail = $this->request->session()->read('Auth.User.email');
                $role = $this->request->session()->read('Auth.User.user_role');
                
                if ($role == 'Admin') {
                    # code...
                    return $this->redirect(['controller' => 'Admin', 'action'=>'index']);
                }
                elseif ($role == 'emp') {
                    # code...
                     return $this->redirect(['controller' => 'Emp', 'action'=>'eindex']);
                }
                elseif ($role == 'Driver') {
                    # code...
                    $res = $conn->execute("select id from driver where email = '{$usermail}'");
                    $collection = $res->fetchAll('assoc');
                    $id = $collection[0]['id'];
                    $res = $conn->execute("update status set driver_status='Active' where email='{$usermail}';");
                     return $this->redirect(['controller' => 'Driver', 'action'=>'dview',$id]);
                }
                elseif ($role == 'Customer') {
                    # code...
                     return $this->redirect(['controller' => 'Booking', 'action'=>'index']);
                }
                //return $this->redirect(['controller' => 'Admin', 'action'=>'index']);
                //return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Username or password is incorrect'));
            }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
            }
        }  
    }
    public function logout(){
        $conn = ConnectionManager::get('default');
        $usermail = $this->request->session()->read('Auth.User.email');
        $res = $conn->execute("update status set driver_status='Leave' where email='{$usermail}';");
        $this->Flash->success(__('Logout successful'));
        return $this->redirect($this->Auth->logout());

    }
    public function forgetpassword(){

    }
    use MailerAwareTrait;
}
