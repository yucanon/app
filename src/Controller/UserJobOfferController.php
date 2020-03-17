<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserJobOffer Controller
 *
 * @property \App\Model\Table\UserJobOfferTable $UserJobOffer
 *
 * @method \App\Model\Entity\UserJobOffer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserJobOfferController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'AdminJobs'],
        ];
        $userJobOffer = $this->paginate($this->UserJobOffer);

        $this->set(compact('userJobOffer'));
    }

    public function isAuthorized($user = null)
    {
     // todo..
        return true;
    }

    /**
     * View method
     *
     * @param string|null $id User Job Offer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userJobOffer = $this->UserJobOffer->get($id, [
            'contain' => ['Users', 'AdminJobs'],
        ]);

        $this->set('userJobOffer', $userJobOffer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userJobOffer = $this->UserJobOffer->newEntity();
        if ($this->request->is('post')) {
            $userJobOffer = $this->UserJobOffer->patchEntity($userJobOffer, $this->request->getData());
            if ($this->UserJobOffer->save($userJobOffer)) {
                $this->Flash->success(__('The user job offer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user job offer could not be saved. Please, try again.'));
        }
        $users = $this->UserJobOffer->Users->find('list', ['limit' => 200]);
        $adminJobs = $this->UserJobOffer->AdminJobs->find('list', ['limit' => 200]);
        $this->set(compact('userJobOffer', 'users', 'adminJobs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Job Offer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userJobOffer = $this->UserJobOffer->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userJobOffer = $this->UserJobOffer->patchEntity($userJobOffer, $this->request->getData());
            if ($this->UserJobOffer->save($userJobOffer)) {
                $this->Flash->success(__('The user job offer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user job offer could not be saved. Please, try again.'));
        }
        $users = $this->UserJobOffer->Users->find('list', ['limit' => 200]);
        $adminJobs = $this->UserJobOffer->AdminJobs->find('list', ['limit' => 200]);
        $this->set(compact('userJobOffer', 'users', 'adminJobs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Job Offer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userJobOffer = $this->UserJobOffer->get($id);
        if ($this->UserJobOffer->delete($userJobOffer)) {
            $this->Flash->success(__('The user job offer has been deleted.'));
        } else {
            $this->Flash->error(__('The user job offer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
