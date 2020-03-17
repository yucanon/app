<?php
namespace App\Controller\Admins;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\Query;

/**
 * AdminFunerals Controller
 *
 * @property \App\Model\Table\AdminJobsTable $AdminFunerals
 *
 * @method \App\Model\Entity\AdminFuneral[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminFuneralsController extends AppController
{
    public $authadmin;

    public function initialize()
    {
        parent::initialize();
        $this->authadmin = $this->Auth->user();
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('logout');
    }

    public function isAuthorized($admin)
    {
        if (isset($admin['role']) && $admin['role'] === '3') {
            return true;
        }
        $this->Flash->error(__('この管理者の承認がされていません'));
        return false;
    }

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
        $adminJobs = $this->paginate($this->AdminFunerals->find()->where(['admins_id' => $this->authadmin['id']]));

        $this->set(compact('adminJobs'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Job id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminJob = $this->AdminJobs->get($id, [
            'contain' => ['Admins'],
        ]);

        $this->set('adminJob', $adminJob);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    //public function add()
    //{
        //debug($this->authadmin);
        //$adminJob = $this->AdminJobs->newEntity();
        //if ($this->request->is('post')) {
            //$adminJob = $this->AdminJobs->patchEntity($adminJob, $this->request->getData());
            //if ($this->AdminJobs->save($adminJob)) {
                //$this->Flash->success(__('The admin job has been saved.'));

                //return $this->redirect(['action' => 'index']);
            //}
            //$this->Flash->error(__('The admin job could not be saved. Please, try again.'));
        //}
        //$admins = $this->AdminJobs->Admins->find()->where(['Admins.id' => $this->authadmin['id']])->first();
       //$this->set(compact('adminJob', 'admins'));
    //}

    public function add()
    {
        if (empty($adminJobs)) {
            $query = $this->AdminJobs->query();
            $query->insert(['admins_id'])->values(['admins_id' => $this->authadmin['id']])->execute();
            $adminJobs = $this->AdminJobs->find()->where(['admins_id' => $this->authadmin['id']])->last();
            $this->redirect(['action' => 'create', $adminJobs['id']]);
        } else {
            $this->Flash->error(__('この管理者の求人がすでに作成されています'));

            return $this->redirect(['action' => 'index']);
        }

        //if (empty($adminJobs)) {
            //$query = $this->AdminJobs->query();
            //$query->insert(['admins_id'])->values(['admins_id' => $this->authadmin['id']])->execute();
            //$this->redirect(['action' => 'create', $adminJobs['id']]);
        //} else {
            //$this->Flash->error(__('この管理者の求人がすでに作成されています'));

            //return $this->redirect(['action' => 'index']);
        //}

        //$this->edit($adminJobs['id']);
                //$this->Flash->success(__('The admin has been saved.'));
            //}
            //$this->Flash->error(__('The admin could not be saved. Please, try again.'));
        //}
        //$this->set(compact('admin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Job id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function create($id = null)
    {
        $adminJob = $this->AdminJobs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminJob = $this->AdminJobs->patchEntity($adminJob, $this->request->getData());
            if ($this->AdminJobs->save($adminJob)) {
                $this->Flash->success(__('The admin job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin job could not be saved. Please, try again.'));
        }
        $admins = $this->AdminJobs->Admins->find()->where(['Admins.id' => $this->authadmin['id']])->first();
        $this->set(compact('adminJob', 'admins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Job id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminJob = $this->AdminJobs->get($id);
        if ($this->AdminJobs->delete($adminJob)) {
            $this->Flash->success(__('The admin job has been deleted.'));
        } else {
            $this->Flash->error(__('The admin job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
