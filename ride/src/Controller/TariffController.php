<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tariff Controller
 *
 * @property \App\Model\Table\TariffTable $Tariff
 *
 * @method \App\Model\Entity\Tariff[] paginate($object = null, array $settings = [])
 */
class TariffController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tariff = $this->paginate($this->Tariff);

        $this->set(compact('tariff'));
        $this->set('_serialize', ['tariff']);
    }
    public function eindex()
    {
        $tariff = $this->paginate($this->Tariff);

        $this->set(compact('tariff'));
        $this->set('_serialize', ['tariff']);
    }


    /**
     * View method
     *
     * @param string|null $id Tariff id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tariff = $this->Tariff->get($id, [
            'contain' => []
        ]);

        $this->set('tariff', $tariff);
        $this->set('_serialize', ['tariff']);
    }
    public function eview($id = null)
    {
        $tariff = $this->Tariff->get($id, [
            'contain' => []
        ]);

        $this->set('tariff', $tariff);
        $this->set('_serialize', ['tariff']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tariff = $this->Tariff->newEntity();
        if ($this->request->is('post')) {
            $tariff = $this->Tariff->patchEntity($tariff, $this->request->getData());
            if ($this->Tariff->save($tariff)) {
                $this->Flash->success(__('The tariff has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tariff could not be saved. Please, try again.'));
        }
        $this->set(compact('tariff'));
        $this->set('_serialize', ['tariff']);
    }
    public function eadd()
    {
        $tariff = $this->Tariff->newEntity();
        if ($this->request->is('post')) {
            $tariff = $this->Tariff->patchEntity($tariff, $this->request->getData());
            if ($this->Tariff->save($tariff)) {
                $this->Flash->success(__('The tariff has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tariff could not be saved. Please, try again.'));
        }
        $this->set(compact('tariff'));
        $this->set('_serialize', ['tariff']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tariff id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tariff = $this->Tariff->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tariff = $this->Tariff->patchEntity($tariff, $this->request->getData());
            if ($this->Tariff->save($tariff)) {
                $this->Flash->success(__('The tariff has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tariff could not be saved. Please, try again.'));
        }
        $this->set(compact('tariff'));
        $this->set('_serialize', ['tariff']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tariff id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tariff = $this->Tariff->get($id);
        if ($this->Tariff->delete($tariff)) {
            $this->Flash->success(__('The tariff has been deleted.'));
        } else {
            $this->Flash->error(__('The tariff could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
