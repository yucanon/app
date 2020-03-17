<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * LogController Controller
 *
 * @property \App\Model\Table\MProgramsTable $MPrograms
 *
 * @method \App\Model\Entity\MProgram[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogController extends AppController
{
    /**
     * Initialize method
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return void
     */
    public function list()
    {
        $mPrograms = $this->paginate(TableRegistry::get('MPrograms'));
        $this->set('mPrograms', $mPrograms);
    }
}
