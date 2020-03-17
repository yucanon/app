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
            'foreignKey' => 'admins_id',
            'joinType' => 'INNER',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 100)
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->scalar('area')
            ->maxLength('area', 100)
            ->requirePresence('area', 'create')
            ->notEmptyString('area');

        $validator
            ->scalar('region')
            ->maxLength('region', 100)
            ->requirePresence('region', 'create')
            ->notEmptyString('region');

        $validator
            ->scalar('maximum_price')
            ->maxLength('maximum_price', 100)
            ->requirePresence('maximum_price', 'create')
            ->notEmptyString('maximum_price');

        $validator
            ->scalar('station_distance')
            ->maxLength('station_distance', 200)
            ->requirePresence('station_distance', 'create')
            ->notEmptyString('station_distance');

        $validator
            ->scalar('catch_copy')
            ->maxLength('catch_copy', 255)
            ->requirePresence('catch_copy', 'create')
            ->notEmptyString('catch_copy');

        $validator
            ->scalar('subtitle')
            ->maxLength('subtitle', 200)
            ->requirePresence('subtitle', 'create')
            ->notEmptyString('subtitle');

        $validator
            ->scalar('occupancy_fee')
            ->maxLength('occupancy_fee', 200)
            ->requirePresence('occupancy_fee', 'create')
            ->notEmptyString('occupancy_fee');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('capacity')
            ->maxLength('capacity', 100)
            ->requirePresence('capacity', 'create')
            ->notEmptyString('capacity');

        $validator
            ->scalar('number_of_staff')
            ->maxLength('number_of_staff', 100)
            ->requirePresence('number_of_staff', 'create')
            ->notEmptyString('number_of_staff');

        $validator
            ->scalar('introduce_nursing_home')
            ->maxLength('introduce_nursing_home', 255)
            ->requirePresence('introduce_nursing_home', 'create')
            ->notEmptyString('introduce_nursing_home');

        $validator
            ->scalar('catchcopy_detail')
            ->maxLength('catchcopy_detail', 255)
            ->requirePresence('catchcopy_detail', 'create')
            ->notEmptyString('catchcopy_detail');

        $validator
            ->scalar('contents')
            ->maxLength('contents', 255)
            ->requirePresence('contents', 'create')
            ->notEmptyString('contents');

        $validator
            ->scalar('main_image')
            ->maxLength('main_image', 200)
            ->requirePresence('main_image', 'create')
            ->notEmptyFile('main_image');

        $validator
            ->scalar('sub1_image')
            ->maxLength('sub1_image', 200)
            ->requirePresence('sub1_image', 'create')
            ->notEmptyFile('sub1_image');

        $validator
            ->scalar('sub2_image')
            ->maxLength('sub2_image', 200)
            ->requirePresence('sub2_image', 'create')
            ->notEmptyFile('sub2_image');

        $validator
            ->scalar('sub3_image')
            ->maxLength('sub3_image', 200)
            ->requirePresence('sub3_image', 'create')
            ->notEmptyFile('sub3_image');

        $validator
            ->scalar('main_image_detail')
            ->maxLength('main_image_detail', 200)
            ->requirePresence('main_image_detail', 'create')
            ->notEmptyFile('main_image_detail');

        $validator
            ->scalar('sub1_image_detail')
            ->maxLength('sub1_image_detail', 200)
            ->requirePresence('sub1_image_detail', 'create')
            ->notEmptyFile('sub1_image_detail');

        $validator
            ->scalar('sub2_image_detail')
            ->maxLength('sub2_image_detail', 200)
            ->requirePresence('sub2_image_detail', 'create')
            ->notEmptyFile('sub2_image_detail');

        $validator
            ->scalar('sub3_image_detail')
            ->maxLength('sub3_image_detail', 200)
            ->requirePresence('sub3_image_detail', 'create')
            ->notEmptyFile('sub3_image_detail');

        $validator
            ->scalar('acceptance')
            ->maxLength('acceptance', 255)
            ->requirePresence('acceptance', 'create')
            ->notEmptyString('acceptance');

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
