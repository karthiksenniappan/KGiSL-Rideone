<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cc3 Controller
 *
 * @property \App\Model\Table\Cc3Table $Cc3
 *
 * @method \App\Model\Entity\Cc3[] paginate($object = null, array $settings = [])
 */
class Cc3Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cc3 = $this->paginate($this->Cc3);

        $this->set(compact('cc3'));
        $this->set('_serialize', ['cc3']);
    }

    /**
     * View method
     *
     * @param string|null $id Cc3 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cc3 = $this->Cc3->get($id, [
            'contain' => []
        ]);

        $this->set('cc3', $cc3);
        $this->set('_serialize', ['cc3']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cc3 = $this->Cc3->newEntity();
        if ($this->request->is('post')) {
            $cc3 = $this->Cc3->patchEntity($cc3, $this->request->getData());
            if ($this->Cc3->save($cc3)) {
                $this->Flash->success(__('The cc3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cc3 could not be saved. Please, try again.'));
        }
        $this->set(compact('cc3'));
        $this->set('_serialize', ['cc3']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cc3 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cc3 = $this->Cc3->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cc3 = $this->Cc3->patchEntity($cc3, $this->request->getData());
            if ($this->Cc3->save($cc3)) {
                $this->Flash->success(__('The cc3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cc3 could not be saved. Please, try again.'));
        }
        $this->set(compact('cc3'));
        $this->set('_serialize', ['cc3']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cc3 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cc3 = $this->Cc3->get($id);
        if ($this->Cc3->delete($cc3)) {
            $this->Flash->success(__('The cc3 has been deleted.'));
        } else {
            $this->Flash->error(__('The cc3 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
