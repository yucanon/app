<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\UserPicturesTable&\Cake\ORM\Association\BelongsTo $UserPictures
 * @property \App\Model\Table\UserJobOfferTable&\Cake\ORM\Association\HasMany $UserJobOffer
 * @property \App\Model\Table\UserPictureTable&\Cake\ORM\Association\HasMany $UserPicture
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        // Upload Plugin
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'image' => [
                'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}{primaryKey}{DS}',
                'size' => 'photo_size',
                'type' => 'photo_type'
            ],
        ]);

        //$this->belongsTo('UserPictures', [
            //'foreignKey' => 'user_picture_id',
        //]);
        //$this->hasMany('UserJobOffer', [
            //'foreignKey' => 'user_id',
        //]);
        //$this->hasMany('UserPicture', [
            //'foreignKey' => 'user_id',
        //]);
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
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->notEmptyString('password');

        $validator
            ->allowEmptyString('image');

        $validator
            ->scalar('username')
            ->maxLength('username', 200)
            ->allowEmptyString('username');

        $validator
            ->scalar('kana')
            ->maxLength('kana', 200)
            ->allowEmptyString('kana');

        $validator
            ->scalar('sex')
            ->maxLength('sex', 100)
            ->allowEmptyString('sex');

        //$validator
            //->date('birthday')
            //->allowEmptyDate('birthday');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 100)
            ->allowEmptyString('phone_number');

        $validator
            ->scalar('job')
            ->maxLength('job', 200)
            ->allowEmptyString('job');

        $validator
            ->scalar('skill')
            ->maxLength('skill', 255)
            ->allowEmptyString('skill');

        $validator
            ->scalar('work_style')
            ->maxLength('work_style', 255)
            ->allowEmptyString('work_style');

        $validator
            ->scalar('pr')
            ->maxLength('pr', 255)
            ->allowEmptyString('pr');

        $validator
            ->scalar('comment')
            ->maxLength('comment', 255)
            ->allowEmptyString('comment');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    //public function buildRules(RulesChecker $rules)
    //{
        //$rules->add($rules->isUnique(['email']));
        //$rules->add($rules->existsIn(['user_picture_id'], 'UserPictures'));

        //return $rules;
    //}
}
