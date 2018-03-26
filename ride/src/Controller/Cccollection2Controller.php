<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cccollection2 Controller
 *
 * @property \App\Model\Table\Cccollection2Table $Cccollection2
 *
 * @method \App\Model\Entity\Cccollection2[] paginate($object = null, array $settings = [])
 */
class Cccollection2Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cccollection2 = $this->paginate($this->Cccollection2);

        $this->set(compact('cccollection2'));
        $this->set('_serialize', ['cccollection2']);
    }

    /**
     * View method
     *
     * @param string|null $id Cccollection2 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cccollection2 = $this->Cccollection2->get($id, [
            'contain' => []
        ]);

        $this->set('cccollection2', $cccollection2);
        $this->set('_serialize', ['cccollection2']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cccollection2 = $this->Cccollection2->newEntity();
        if ($this->request->is('post')) {
            $cccollection2 = $this->Cccollection2->patchEntity($cccollection2, $this->request->getData());
            if ($this->Cccollection2->save($cccollection2)) {
                $this->Flash->success(__('The cccollection2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cccollection2 could not be saved. Please, try again.'));
        }
        $this->set(compact('cccollection2'));
        $this->set('_serialize', ['cccollection2']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cccollection2 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cccollection2 = $this->Cccollection2->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cccollection2 = $this->Cccollection2->patchEntity($cccollection2, $this->request->getData());
            if ($this->Cccollection2->save($cccollection2)) {
                $this->Flash->success(__('The cccollection2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cccollection2 could not be saved. Please, try again.'));
        }
        $this->set(compact('cccollection2'));
        $this->set('_serialize', ['cccollection2']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cccollection2 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cccollection2 = $this->Cccollection2->get($id);
        if ($this->Cccollection2->delete($cccollection2)) {
            $this->Flash->success(__('The cccollection2 has been deleted.'));
        } else {
            $this->Flash->error(__('The cccollection2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
