<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminFunerals Controller
 *
 * @property \App\Model\Table\AdminFuneralsTable $AdminFunerals
 *
 * @method \App\Model\Entity\AdminFuneral[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminFuneralsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Admins'],
        ];
        $adminFunerals = $this->paginate($this->AdminFunerals);

        $this->set(compact('adminFunerals'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Funeral id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminFuneral = $this->AdminFunerals->get($id, [
            'contain' => ['Admins'],
        ]);

        $this->set('adminFuneral', $adminFuneral);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminFuneral = $this->AdminFunerals->newEntity();
        if ($this->request->is('post')) {
            $adminFuneral = $this->AdminFunerals->patchEntity($adminFuneral, $this->request->getData());
            if ($this->AdminFunerals->save($adminFuneral)) {
                $this->Flash->success(__('The admin funeral has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin funeral could not be saved. Please, try again.'));
        }
        $admins = $this->AdminFunerals->Admins->find('list', ['limit' => 200]);
        $this->set(compact('adminFuneral', 'admins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Funeral id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminFuneral = $this->AdminFunerals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminFuneral = $this->AdminFunerals->patchEntity($adminFuneral, $this->request->getData());
            if ($this->AdminFunerals->save($adminFuneral)) {
                $this->Flash->success(__('The admin funeral has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin funeral could not be saved. Please, try again.'));
        }
        $admins = $this->AdminFunerals->Admins->find('list', ['limit' => 200]);
        $this->set(compact('adminFuneral', 'admins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Funeral id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminFuneral = $this->AdminFunerals->get($id);
        if ($this->AdminFunerals->delete($adminFuneral)) {
            $this->Flash->success(__('The admin funeral has been deleted.'));
        } else {
            $this->Flash->error(__('The admin funeral could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
