<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminNursingHomes Controller
 *
 * @property \App\Model\Table\AdminNursingHomesTable $AdminNursingHomes
 *
 * @method \App\Model\Entity\AdminNursingHome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminNursingHomesController extends AppController
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
        $adminNursingHomes = $this->paginate($this->AdminNursingHomes);

        $this->set(compact('adminNursingHomes'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Nursing Home id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminNursingHome = $this->AdminNursingHomes->get($id, [
            'contain' => ['Admins'],
        ]);

        $this->set('adminNursingHome', $adminNursingHome);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminNursingHome = $this->AdminNursingHomes->newEntity();
        if ($this->request->is('post')) {
            $adminNursingHome = $this->AdminNursingHomes->patchEntity($adminNursingHome, $this->request->getData());
            if ($this->AdminNursingHomes->save($adminNursingHome)) {
                $this->Flash->success(__('The admin nursing home has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin nursing home could not be saved. Please, try again.'));
        }
        $admins = $this->AdminNursingHomes->Admins->find('list', ['limit' => 200]);
        $this->set(compact('adminNursingHome', 'admins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Nursing Home id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminNursingHome = $this->AdminNursingHomes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminNursingHome = $this->AdminNursingHomes->patchEntity($adminNursingHome, $this->request->getData());
            if ($this->AdminNursingHomes->save($adminNursingHome)) {
                $this->Flash->success(__('The admin nursing home has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin nursing home could not be saved. Please, try again.'));
        }
        $admins = $this->AdminNursingHomes->Admins->find('list', ['limit' => 200]);
        $this->set(compact('adminNursingHome', 'admins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Nursing Home id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminNursingHome = $this->AdminNursingHomes->get($id);
        if ($this->AdminNursingHomes->delete($adminNursingHome)) {
            $this->Flash->success(__('The admin nursing home has been deleted.'));
        } else {
            $this->Flash->error(__('The admin nursing home could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
