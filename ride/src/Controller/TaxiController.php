<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Taxi Controller
 *
 * @property \App\Model\Table\TaxiTable $Taxi
 *
 * @method \App\Model\Entity\Taxi[] paginate($object = null, array $settings = [])
 */
class TaxiController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $taxi = $this->paginate($this->Taxi);

        $this->set(compact('taxi'));
        $this->set('_serialize', ['taxi']);
    }

    /**
     * View method
     *
     * @param string|null $id Taxi id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taxi = $this->Taxi->get($id, [
            'contain' => []
        ]);

        $this->set('taxi', $taxi);
        $this->set('_serialize', ['taxi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $taxi = $this->Taxi->newEntity();
        if ($this->request->is('post')) {
            $taxi = $this->Taxi->patchEntity($taxi, $this->request->getData());
            if ($this->Taxi->save($taxi)) {
                $this->Flash->success(__('The taxi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The taxi could not be saved. Please, try again.'));
        }
        $this->set(compact('taxi'));
        $this->set('_serialize', ['taxi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Taxi id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $taxi = $this->Taxi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taxi = $this->Taxi->patchEntity($taxi, $this->request->getData());
            if ($this->Taxi->save($taxi)) {
                $this->Flash->success(__('The taxi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The taxi could not be saved. Please, try again.'));
        }
        $this->set(compact('taxi'));
        $this->set('_serialize', ['taxi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Taxi id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $taxi = $this->Taxi->get($id);
        if ($this->Taxi->delete($taxi)) {
            $this->Flash->success(__('The taxi has been deleted.'));
        } else {
            $this->Flash->error(__('The taxi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
