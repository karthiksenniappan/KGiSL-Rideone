<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Driver Controller
 *
 * @property \App\Model\Table\DriverTable $Driver
 *
 * @method \App\Model\Entity\Driver[] paginate($object = null, array $settings = [])
 */
class DriverController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $driver = $this->paginate($this->Driver);

        $this->set(compact('driver'));
        $this->set('_serialize', ['driver']);
    }

    /**
     * View method
     *
     * @param string|null $id Driver id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $driver = $this->Driver->get($id, [
            'contain' => []
        ]);

        $this->set('driver', $driver);
        $this->set('_serialize', ['driver']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $driver = $this->Driver->newEntity();
        if ($this->request->is('post')) {
            $username = $_POST['user_name'];
             $email = $_POST['email'];
             $password1 = $_POST['password'];
             $hasher = new DefaultPasswordHasher();
             $password = $hasher->hash($password1);
             $mobile = $_POST['mobile'];
             $user_role = "Driver";
             $conn = ConnectionManager::get('default');
             $res = $conn->execute("insert into users(name,email,password,mobile,user_role)
                                values('{$username}','{$email}','{$password}','{$mobile}','{$user_role}')");
            $driver = $this->Driver->patchEntity($driver, $this->request->getData());
            if ($this->Driver->save($driver)) {
                $this->Flash->success(__('The driver has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The driver could not be saved. Please, try again.'));
        }
        $this->set(compact('driver'));
        $this->set('_serialize', ['driver']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Driver id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $driver = $this->Driver->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $driver = $this->Driver->patchEntity($driver, $this->request->getData());
            if ($this->Driver->save($driver)) {
                $this->Flash->success(__('The driver has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The driver could not be saved. Please, try again.'));
        }
        $this->set(compact('driver'));
        $this->set('_serialize', ['driver']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Driver id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $driver = $this->Driver->get($id);
        if ($this->Driver->delete($driver)) {
            $this->Flash->success(__('The driver has been deleted.'));
        } else {
            $this->Flash->error(__('The driver could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
