<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Driver Model
 *
 * @method \App\Model\Entity\Driver get($primaryKey, $options = [])
 * @method \App\Model\Entity\Driver newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Driver[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Driver|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Driver patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Driver[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Driver findOrCreate($search, callable $callback = null, $options = [])
 */
class DriverTable extends Table
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

        $this->setTable('driver');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('owners')
            ->maxLength('owners', 200)
            ->requirePresence('owners', 'create')
            ->notEmpty('owners');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 200)
            ->requirePresence('user_name', 'create')
            ->notEmpty('user_name');

        $validator
            ->scalar('password')
            ->maxLength('password', 200)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 200)
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->date('dob')
            ->requirePresence('dob', 'create')
            ->notEmpty('dob');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 200)
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('bank_name')
            ->maxLength('bank_name', 200)
            ->requirePresence('bank_name', 'create')
            ->notEmpty('bank_name');

        $validator
            ->scalar('account_no')
            ->maxLength('account_no', 200)
            ->requirePresence('account_no', 'create')
            ->notEmpty('account_no');

        $validator
            ->scalar('licence_no')
            ->maxLength('licence_no', 200)
            ->requirePresence('licence_no', 'create')
            ->notEmpty('licence_no');

        $validator
            ->date('licence_due')
            ->requirePresence('licence_due', 'create')
            ->notEmpty('licence_due');

        $validator
            ->date('joining_date')
            ->requirePresence('joining_date', 'create')
            ->notEmpty('joining_date');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
