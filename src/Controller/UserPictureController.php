<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserPicture Controller
 *
 * @property \App\Model\Table\UserPictureTable $UserPicture
 *
 * @method \App\Model\Entity\UserPicture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserPictureController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $userPicture = $this->paginate($this->UserPicture);

        $this->set(compact('userPicture'));
    }

    /**
     * View method
     *
     * @param string|null $id User Picture id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userPicture = $this->UserPicture->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('userPicture', $userPicture);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userPicture = $this->UserPicture->newEntity();
        if ($this->request->is('post')) {
            $userPicture = $this->UserPicture->patchEntity($userPicture, $this->request->getData());
            if ($this->UserPicture->save($userPicture)) {
                $this->Flash->success(__('The user picture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user picture could not be saved. Please, try again.'));
        }
        $this->set(compact('userPicture'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Picture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userPicture = $this->UserPicture->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userPicture = $this->UserPicture->patchEntity($userPicture, $this->request->getData());
            if ($this->UserPicture->save($userPicture)) {
                $this->Flash->success(__('The user picture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user picture could not be saved. Please, try again.'));
        }
        $this->set(compact('userPicture'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Picture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userPicture = $this->UserPicture->get($id);
        if ($this->UserPicture->delete($userPicture)) {
            $this->Flash->success(__('The user picture has been deleted.'));
        } else {
            $this->Flash->error(__('The user picture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
