<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


/**
 * Cccollection1 Controller
 *
 * @property \App\Model\Table\Cccollection1Table $Cccollection1
 *
 * @method \App\Model\Entity\Cccollection1[] paginate($object = null, array $settings = [])
 */
class Cccollection1Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cccollection1 = $this->paginate($this->Cccollection1);

        $this->set(compact('cccollection1'));
        $this->set('_serialize', ['cccollection1']);
    }

    /**
     * View method
     *
     * @param string|null $id Cccollection1 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cccollection1 = $this->Cccollection1->get($id, [
            'contain' => []
        ]);

        $this->set('cccollection1', $cccollection1);
        $this->set('_serialize', ['cccollection1']);
    }

     public function calculate($email = null){
        $conn = ConnectionManager::get('default');
        $res = $conn->execute("select total_amount from cccollection1 where email = '{$email}'");
        $res1 = $conn->execute("select owners from driver where email = '{$email}' "); 
        $collection = $res->fetchAll('assoc');
        $amount = $collection[0]['total_amount'];

        $drive = $res1->fetchAll('assoc');
        $id = $drive[0]['owners'];

        if ($id == 1) {
            # code...
            $pay = $amount;

        $res2 = $conn->execute("update cc3 set total_amount='{$pay}',payable_amount='{$pay}' where email = '{$email}'");
        }
        
        if ($id!=1) {
            
            $pay = $amount*0.20;

        $res1 = $conn->execute("update cc3 set total_amount='{$pay}',payable_amount='{$pay}' where email = '{$email}'");

        }

        return $this->redirect(['controller'=>'Cc3','action' => 'index']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cccollection1 = $this->Cccollection1->newEntity();
        if ($this->request->is('post')) {
            $cccollection1 = $this->Cccollection1->patchEntity($cccollection1, $this->request->getData());
            if ($this->Cccollection1->save($cccollection1)) {
                $this->Flash->success(__('The cccollection1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cccollection1 could not be saved. Please, try again.'));
        }
        $this->set(compact('cccollection1'));
        $this->set('_serialize', ['cccollection1']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cccollection1 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cccollection1 = $this->Cccollection1->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cccollection1 = $this->Cccollection1->patchEntity($cccollection1, $this->request->getData());
            if ($this->Cccollection1->save($cccollection1)) {
                $this->Flash->success(__('The cccollection1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cccollection1 could not be saved. Please, try again.'));
        }
        $this->set(compact('cccollection1'));
        $this->set('_serialize', ['cccollection1']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cccollection1 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cccollection1 = $this->Cccollection1->get($id);
        if ($this->Cccollection1->delete($cccollection1)) {
            $this->Flash->success(__('The cccollection1 has been deleted.'));
        } else {
            $this->Flash->error(__('The cccollection1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
