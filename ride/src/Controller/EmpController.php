<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emp Controller
 *
 * @property \App\Model\Table\EmpTable $Emp
 *
 * @method \App\Model\Entity\Emp[] paginate($object = null, array $settings = [])
 */
class EmpController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $emp = $this->paginate($this->Emp);

        $this->set(compact('emp'));
        $this->set('_serialize', ['emp']);
    }
    public function eindex()
    {
        $emp = $this->paginate($this->Emp);

        $this->set(compact('emp'));
        $this->set('_serialize', ['emp']);
    }

    /**
     * View method
     *
     * @param string|null $id Emp id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emp = $this->Emp->get($id, [
            'contain' => []
        ]);

        $this->set('emp', $emp);
        $this->set('_serialize', ['emp']);
    }
    public function eview($id = null)
    {
        $emp = $this->Emp->get($id, [
            'contain' => []
        ]);

        $this->set('emp', $emp);
        $this->set('_serialize', ['emp']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emp = $this->Emp->newEntity();
        if ($this->request->is('post')) {
            $emp = $this->Emp->patchEntity($emp, $this->request->getData());
            if ($this->Emp->save($emp)) {
                $this->Flash->success(__('The emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp could not be saved. Please, try again.'));
        }
        $this->set(compact('emp'));
        $this->set('_serialize', ['emp']);
    }
    public function eadd()
    {
        $emp = $this->Emp->newEntity();
        if ($this->request->is('post')) {
            $emp = $this->Emp->patchEntity($emp, $this->request->getData());
            if ($this->Emp->save($emp)) {
                $this->Flash->success(__('The emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp could not be saved. Please, try again.'));
        }
        $this->set(compact('emp'));
        $this->set('_serialize', ['emp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emp id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emp = $this->Emp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emp = $this->Emp->patchEntity($emp, $this->request->getData());
            if ($this->Emp->save($emp)) {
                $this->Flash->success(__('The emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp could not be saved. Please, try again.'));
        }
        $this->set(compact('emp'));
        $this->set('_serialize', ['emp']);
    }
    public function eedit($id = null)
    {
        $emp = $this->Emp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emp = $this->Emp->patchEntity($emp, $this->request->getData());
            if ($this->Emp->save($emp)) {
                $this->Flash->success(__('The emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emp could not be saved. Please, try again.'));
        }
        $this->set(compact('emp'));
        $this->set('_serialize', ['emp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emp = $this->Emp->get($id);
        if ($this->Emp->delete($emp)) {
            $this->Flash->success(__('The emp has been deleted.'));
        } else {
            $this->Flash->error(__('The emp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
