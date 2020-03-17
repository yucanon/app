<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserJobOffer Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AdminJobsTable&\Cake\ORM\Association\BelongsTo $AdminJobs
 *
 * @method \App\Model\Entity\UserJobOffer get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserJobOffer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserJobOffer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserJobOffer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserJobOffer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserJobOffer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserJobOffer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserJobOffer findOrCreate($search, callable $callback = null, $options = [])
 */
class UserJobOfferTable extends Table
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

        $this->setTable('user_job_offer');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('AdminJobs', [
            'foreignKey' => 'admin_jobs_id',
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
            ->scalar('work_experience')
            ->maxLength('work_experience', 255)
            ->allowEmptyString('work_experience');

        $validator
            ->scalar('commuting_time')
            ->maxLength('commuting_time', 255)
            ->allowEmptyString('commuting_time');

        $validator
            ->scalar('spause')
            ->maxLength('spause', 200)
            ->allowEmptyString('spause');

        $validator
            ->scalar('support_family')
            ->maxLength('support_family', 255)
            ->allowEmptyString('support_family');

        $validator
            ->scalar('spause_support_family')
            ->maxLength('spause_support_family', 255)
            ->allowEmptyString('spause_support_family');

        $validator
            ->scalar('work_style')
            ->maxLength('work_style', 255)
            ->allowEmptyString('work_style');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['admin_jobs_id'], 'AdminJobs'));

        return $rules;
    }
}
