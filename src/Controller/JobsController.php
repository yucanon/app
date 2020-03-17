<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Jobs Controller
 * 
 */
class JobsController extends AppController
{
    public $authuser;
    public $adminJobs;

    public function initialize()
    {
        parent::initialize();
        $this->authuser = $this->Auth->user();
        $this->adminJobs = TableRegistry::getTableLocator()->get('AdminJobs');
    }
  
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'searchPrefecture']);
    }

    public function isAuthorized($user = null)
    {
        return true;
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        //$this->paginate = [
            //'contain' => ['UserPictures'],
        //];
        $adminJobs = $this->paginate($this->adminJobs);
        //$users = $this->paginate($this->Users);
        $this->set(compact('adminJobs'));
    }

    public function searchPrefecture($area) {
        $this->set(compact('area'));
    }
}
