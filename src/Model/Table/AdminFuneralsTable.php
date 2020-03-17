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
            ->scalar('funeral_type')
            ->maxLength('funeral_type', 100)
            ->requirePresence('funeral_type', 'create')
            ->notEmptyString('funeral_type');

        $validator
            ->scalar('cost')
            ->maxLength('cost', 100)
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost');

        $validator
            ->scalar('station_destance')
            ->maxLength('station_destance', 100)
            ->requirePresence('station_destance', 'create')
            ->notEmptyString('station_destance');

        $validator
            ->scalar('catch_copy')
            ->maxLength('catch_copy', 255)
            ->requirePresence('catch_copy', 'create')
            ->notEmptyString('catch_copy');

        $validator
            ->scalar('subtitle')
            ->maxLength('subtitle', 255)
            ->requirePresence('subtitle', 'create')
            ->notEmptyString('subtitle');

        $validator
            ->scalar('evaluation')
            ->maxLength('evaluation', 255)
            ->requirePresence('evaluation', 'create')
            ->notEmptyString('evaluation');

        $validator
            ->scalar('price_plan')
            ->maxLength('price_plan', 255)
            ->requirePresence('price_plan', 'create')
            ->notEmptyString('price_plan');

        $validator
            ->scalar('traffic')
            ->maxLength('traffic', 255)
            ->requirePresence('traffic', 'create')
            ->notEmptyString('traffic');

        $validator
            ->scalar('funeral_detail')
            ->maxLength('funeral_detail', 255)
            ->requirePresence('funeral_detail', 'create')
            ->notEmptyString('funeral_detail');

        $validator
            ->scalar('plan_list')
            ->maxLength('plan_list', 255)
            ->requirePresence('plan_list', 'create')
            ->notEmptyString('plan_list');

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
            ->scalar('famous_place')
            ->maxLength('famous_place', 255)
            ->requirePresence('famous_place', 'create')
            ->notEmptyString('famous_place');

        $validator
            ->scalar('nearby_information')
            ->maxLength('nearby_information', 255)
            ->requirePresence('nearby_information', 'create')
            ->notEmptyString('nearby_information');

        $validator
            ->scalar('address')
            ->maxLength('address', 200)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

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
