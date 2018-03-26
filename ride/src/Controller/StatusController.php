<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
/**
 * Status Controller
 *
 * @property \App\Model\Table\StatusTable $Status
 *
 * @method \App\Model\Entity\Status[] paginate($object = null, array $settings = [])
 */
class StatusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $status = $this->paginate($this->Status);

        $this->set(compact('status'));
        $this->set('_serialize', ['status']);
    }
    public function eindex()
    {
        $status = $this->paginate($this->Status);

        $this->set(compact('status'));
        $this->set('_serialize', ['status']);
    }
    public function pickup()
    {

        $conn = ConnectionManager::get('default');
        $res = $conn->execute("select * from status where travel_status = 'Not assigned'");
        $count = $conn->execute("select Count(*) as value from status where travel_status = 'Not assigned'");
        $result = $count->fetchAll('assoc');
        $status = $res->fetchAll('assoc');
        //echo $result[0]['value'];
        //die();
        //return $this->redirect(['action' => 'index']);

        //$status = $this->paginate($this->Status);

        $this->set('result',$result);
        $this->set('status',$status);
        $this->set('_serialize', ['status']);
    }
    public function drop()
    {

        $conn = ConnectionManager::get('default');
        $res = $conn->execute("select * from status where travel_status = 'Started'");
        $count = $conn->execute("select Count(*) as value from status where travel_status = 'Started'");
        $result = $count->fetchAll('assoc');
        $status = $res->fetchAll('assoc');


        //$status = $this->paginate($this->Status);

        $this->set('result',$result);
        $this->set('status',$status);
        $this->set('_serialize', ['status']);
    }

    /**
     * View method
     *
     * @param string|null $id Status id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $status = $this->Status->get($id, [
            'contain' => []
        ]);

        $this->set('status', $status);
        $this->set('_serialize', ['status']);
    }
    public function eview($id = null)
    {
        $status = $this->Status->get($id, [
            'contain' => []
        ]);

        $this->set('status', $status);
        $this->set('_serialize', ['status']);
    }

    public function start($id = null){
        $conn = ConnectionManager::get('default');
        $usermail = $this->request->session()->read('Auth.User.email');
        $res = $conn->execute("update status set travel_status='Started' where id='{$id}';");
        return $this->redirect(['controller'=>'Alert','action' => 'index']);

    }

    
    public function stop($id = null){

        $conn = ConnectionManager::get('default');
        $res = $conn->execute("select * from status where id = '{$id}'");
        $booking = $res->fetchAll('assoc');
        $total = $booking[0]['total_count']+1;
        $resu = $conn->execute("update status set travel_status='Not assigned',total_count='{$total}' where id='{$id}';");
        return $this->redirect(['controller'=>'Alert','action' => 'index']);

    }
    

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $status = $this->Status->newEntity();
        if ($this->request->is('post')) {
            $email = $_POST['email'];
            $conn = ConnectionManager::get('default');
             $res = $conn->execute("insert into cccollection1(email,total_amount)
                                values('{$email}','0')");
             $res1 = $conn->execute("insert into cccollection2(email,total_amount)
                                values('{$email}','0')");
             $res2 = $conn->execute("insert into cc3(email,paid_date,total_amount,payable_amount,balance,old_balance)
                                values('{$email}','2018-02-21','0','0','0','0')");
            $status = $this->Status->patchEntity($status, $this->request->getData());
            if ($this->Status->save($status)) {
                $this->Flash->success(__('The status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status could not be saved. Please, try again.'));
        }
        $this->set(compact('status'));
        $this->set('_serialize', ['status']);
    }
    public function eadd()
    {
        $status = $this->Status->newEntity();
        if ($this->request->is('post')) {
            $email = $_POST['email'];
            $conn = ConnectionManager::get('default');
             $res = $conn->execute("insert into cccollection1(email,total_amount)
                                values('{$email}','0')");
             $res1 = $conn->execute("insert into cccollection2(email,total_amount)
                                values('{$email}','0')");
             $res2 = $conn->execute("insert into cc3(email,paid_date,total_amount,payable_amount,balance,old_balance)
                                values('{$email}','2018-02-21','0','0','0','0')");
            $status = $this->Status->patchEntity($status, $this->request->getData());
            if ($this->Status->save($status)) {
                $this->Flash->success(__('The status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status could not be saved. Please, try again.'));
        }
        $this->set(compact('status'));
        $this->set('_serialize', ['status']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $status = $this->Status->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $status = $this->Status->patchEntity($status, $this->request->getData());
            if ($this->Status->save($status)) {
                $this->Flash->success(__('The status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status could not be saved. Please, try again.'));
        }
        $this->set(compact('status'));
        $this->set('_serialize', ['status']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $status = $this->Status->get($id);
        if ($this->Status->delete($status)) {
            $this->Flash->success(__('The status has been deleted.'));
        } else {
            $this->Flash->error(__('The status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
