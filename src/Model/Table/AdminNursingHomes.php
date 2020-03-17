<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdminNursingHomes Model
 *
 * @property \App\Model\Table\AdminsTable&\Cake\ORM\Association\BelongsTo $Admins
 *
 * @method \App\Model\Entity\AdminNursingHome get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdminNursingHome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdminNursingHome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdminNursingHome|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminNursingHome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminNursingHome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdminNursingHome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdminNursingHome findOrCreate($search, callable $callback = null, $options = [])
 */
class AdminNursingHomesTable extends Table
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

        $this->setTable('admin_nursing_homes');
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
            ->maxLength('phone_number', 100)
            ->allowEmptyString('phone_number');

        $validator
            ->maxLength('area', 100)
            ->allowEmptyString('area');

        $validator
            ->maxLength('region', 100)
            ->allowEmptyString('region');

        $validator
            ->maxLength('maximum_price', 100)
            ->allowEmptyString('maximum_price');

        $validator
            //->scalar('work_time')
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
            ->maxLength('occupancy_fee', 200)
            ->allowEmptyString('occupancy_fee');

        $validator
            //->scalar('contents')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            //->scalar('address')
            ->maxLength('capacity', 100)
            ->allowEmptyString('capacity');

        $validator
            //->scalar('nearest_station')
            ->maxLength('number_of_staff', 100)
            ->allowEmptyString('number_of_staff');

        $validator
            //->scalar('salary_detail')
            ->maxLength('introduce_nursing_home', 255)
            ->allowEmptyString('introduce_nursing_home');

        $validator
            //->scalar('work_time_detail')
            ->maxLength('catchcopy_detail', 255)
            ->allowEmptyString('catchcopy_detail');

        $validator
            //->scalar('work_time_detail')
            ->maxLength('contents', 255)
            ->allowEmptyString('contents');

        $validator
            ->maxLength('main_image', 200)
            ->notEmptyString('main_image');

        $validator
            ->maxLength('sub1_image', 200)
            ->notEmptyString('sub1_image');

        $validator
            ->maxLength('sub2_image', 200)
            ->notEmptyString('sub2_image');

        $validator
            ->maxLength('sub3_image', 200)
            ->notEmptyString('sub3_image');
            
        $validator
            ->maxLength('main_image_detail', 200)
            ->allowEmptyString('main_image_detail'); 

        $validator
            ->maxLength('sub1_image_detail', 200)
            ->allowEmptyString('sub1_image_detail');

        $validator
            ->maxLength('sub2_image_detail', 200)
            ->allowEmptyString('sub2_image_detail'); 

        $validator
            ->maxLength('sub3_image_detail', 200)
            ->allowEmptyString('sub3_image_detail');

        $validator
            //->scalar('holidays_detail')
            ->maxLength('acceptance', 255)
            ->allowEmptyString('acceptance');

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
