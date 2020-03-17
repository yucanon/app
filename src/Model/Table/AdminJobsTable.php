<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdminJobs Model
 *
 * @property \App\Model\Table\AdminsTable&\Cake\ORM\Association\BelongsTo $Admins
 *
 * @method \App\Model\Entity\AdminJob get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdminJob newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdminJob[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdminJob|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminJob saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminJob patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdminJob[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdminJob findOrCreate($search, callable $callback = null, $options = [])
 */
class AdminJobsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('admin_jobs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Admins', [
            'foreignKey' => 'id',
        ]);

        // Upload Plugin
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'main_image' => [
                'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}{primaryKey}{DS}',
                'size' => 'photo_size',
                'type' => 'photo_type'
            ],
            'sub1_image' => [
                'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}{primaryKey}{DS}',
                'size' => 'photo_size',
                'type' => 'photo_type'
            ],
            'sub2_image' => [
                'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}{primaryKey}{DS}',
                'size' => 'photo_size',
                'type' => 'photo_type'
            ],
            'sub3_image' => [
                'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}{primaryKey}{DS}',
                'size' => 'photo_size',
                'type' => 'photo_type'
            ],
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->notEmptyString('main_image');

        $validator
            ->notEmptyString('sub1_image');
            
        $validator
            ->allowEmptyString('sub2_image'); 

        $validator
            ->allowEmptyString('sub3_image');    

        $validator
            //->scalar('phone_number')
            //->maxLength('phone_number', 100)
            ->allowEmptyString('phone_number');

        $validator
            //->scalar('occupation')
            //->maxLength('occupation', 200)
            ->allowEmptyString('occupation');

        $validator
            //->scalar('occupation_detail')
            //->maxLength('occupation_detail', 255)
            ->allowEmptyString('occupation_detail');

        $validator
            //->scalar('area')
            //->maxLength('area', 100)
            ->allowEmptyString('area');

        $validator
            //->maxLength('region', 100)
            ->allowEmptyString('region');

        $validator
            //->scalar('work_period')
            //->maxLength('work_period', 150)
            ->allowEmptyString('work_period');

        $validator
            //->scalar('work_time')
            //->maxLength('work_time', 150)
            ->allowEmptyString('work_time');

        $validator
            //->scalar('holidays')
            //->maxLength('holidays', 100)
            ->allowEmptyString('holidays');

        $validator
            //->scalar('shift_work')
            //->maxLength('shift_work', 150)
            ->allowEmptyString('shift_work');

        $validator
            //->scalar('hourly_wage')
            //->maxLength('hourly_wage', 200)
            ->allowEmptyString('hourly_wage');

        $validator
            //->scalar('welfare')
            //->maxLength('welfare', 255)
            ->allowEmptyString('welfare');

        $validator
            //->scalar('address')
            //->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            //->scalar('nearest_station')
            //->maxLength('nearest_station', 150)
            ->allowEmptyString('nearest_station');

        $validator
            //->scalar('salary_detail')
            //->maxLength('salary_detail', 255)
            ->allowEmptyString('salary_detail');

        $validator
            //->scalar('work_time_detail')
            //->maxLength('work_time_detail', 255)
            ->allowEmptyString('work_time_detail');

        $validator
            //->scalar('work_period_detail')
            //->maxLength('work_period_detail', 255)
            ->allowEmptyString('work_period_detail');

        $validator
            //->scalar('holidays_detail')
            //->maxLength('holidays_detail', 255)
            ->allowEmptyString('holidays_detail');

        $validator
            //->scalar('address_detail')
            //->maxLength('address_detail', 255)
            ->allowEmptyString('address_detail');

        $validator
            //->scalar('contents')
            //->maxLength('contents', 255)
            ->allowEmptyString('contents');

        $validator
            ->allowEmptyString('catchcopy');

        $validator
            //->scalar('introduce_job')
            //->maxLength('introduce_job', 255)
            ->allowEmptyString('introduce_job');

        $validator
            //->scalar('merit')
            //->maxLength('merit', 255)
            ->allowEmptyString('merit');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['admins_id'], 'Admins'));

        return $rules;
    }
}
