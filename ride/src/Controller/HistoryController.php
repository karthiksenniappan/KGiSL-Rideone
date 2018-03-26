<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * History Controller
 *
 * @property \App\Model\Table\HistoryTable $History
 *
 * @method \App\Model\Entity\History[] paginate($object = null, array $settings = [])
 */
class HistoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $history = $this->paginate($this->History);

        $this->set(compact('history'));
        $this->set('_serialize', ['history']);
    }
    public function sample($email = null){
        $conn = ConnectionManager::get('default');
        $res = $conn->execute("select * from history where email = '{$email}'");
        $count = $conn->execute("select Count(*) as value from history where email = '{$email}'");
        $result = $count->fetchAll('assoc');
        $history = $res->fetchAll('assoc');
        $this->set('result',$result);
        $this->set('history', $history);
        $this->set('_serialize', ['history']);
    }

    /**
     * View method
     *
     * @param string|null $id History id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $history = $this->History->get($id, [
            'contain' => []
        ]);

        $this->set('history', $history);
        $this->set('_serialize', ['history']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $history = $this->History->newEntity();
        if ($this->request->is('post')) {
            $history = $this->History->patchEntity($history, $this->request->getData());
            if ($this->History->save($history)) {
                $this->Flash->success(__('The history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The history could not be saved. Please, try again.'));
        }
        $this->set(compact('history'));
        $this->set('_serialize', ['history']);
    }

    /**
     * Edit method
     *
     * @param string|null $id History id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $history = $this->History->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $history = $this->History->patchEntity($history, $this->request->getData());
            if ($this->History->save($history)) {
                $this->Flash->success(__('The history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The history could not be saved. Please, try again.'));
        }
        $this->set(compact('history'));
        $this->set('_serialize', ['history']);
    }

    /**
     * Delete method
     *
     * @param string|null $id History id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $history = $this->History->get($id);
        if ($this->History->delete($history)) {
            $this->Flash->success(__('The history has been deleted.'));
        } else {
            $this->Flash->error(__('The history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
