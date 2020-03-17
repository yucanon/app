<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdminFunerals Model
 *
 * @property \App\Model\Table\AdminsTable&\Cake\ORM\Association\BelongsTo $Admins
 *
 * @method \App\Model\Entity\AdminFuneral get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdminFuneral newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdminFuneral[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdminFuneral|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminFuneral saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminFuneral patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdminFuneral[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdminFuneral findOrCreate($search, callable $callback = null, $options = [])
 */
class AdminFuneralsTable extends Table
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

        $this->setTable('admin_funerals');
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
            //->scalar('phone_number')
            ->maxLength('phone_number', 100)
            ->allowEmptyString('phone_number');

        $validator
            //->scalar('area')
            ->maxLength('area', 100)
            ->allowEmptyString('area');

        $validator
            ->maxLength('region', 100)
            ->allowEmptyString('region');

        $validator
            //->scalar('work_period')
            ->maxLength('funeral_type', 100)
            ->allowEmptyString('funeral_type');

        $validator
            //->scalar('work_time')
            ->maxLength('cost', 150)
            ->allowEmptyString('cost');

        $validator
            //->scalar('holidays')
            ->maxLength('station_distance', 150)
            ->allowEmptyString('station_distance');

        $validator
            //->scalar('shift_work')
            ->maxLength('catchcopy', 255)
            ->allowEmptyString('catchcopy');

        $validator
            //->scalar('hourly_wage')
            ->maxLength('subtitle', 200)
            ->allowEmptyString('subtitle');

        $validator
            //->scalar('welfare')
            ->maxLength('evaluation', 255)
            ->allowEmptyString('evaluation');

        $validator
            //->scalar('address')
            ->maxLength('price_plan', 255)
            ->allowEmptyString('price_plan');

        $validator
            //->scalar('nearest_station')
            ->maxLength('traffic', 250)
            ->allowEmptyString('traffic');

        $validator
            //->scalar('salary_detail')
            ->maxLength('funeral_detail', 255)
            ->allowEmptyString('funeral_detail');

        $validator
            //->scalar('work_time_detail')
            ->maxLength('plan_list', 255)
            ->allowEmptyString('plan_list');

        $validator
            ->maxLength('main_image', 200)
            ->notEmptyString('main_image');

        $validator
            ->maxLength('sub1_image', 200)
            ->notEmptyString('sub1_image');
            
        $validator
            ->maxLength('main_image_detail', 200)
            ->allowEmptyString('main_image_detail'); 

        $validator
            ->maxLength('sub1_image_detail', 200)
            ->allowEmptyString('sub1_image_detail');

        $validator
            //->scalar('holidays_detail')
            ->maxLength('famous_place', 255)
            ->allowEmptyString('famous_place');

        $validator
            //->scalar('address_detail')
            ->maxLength('nearby_information', 255)
            ->allowEmptyString('nearby_information');

        $validator
            //->scalar('contents')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

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
