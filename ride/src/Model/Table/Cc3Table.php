<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cc3 Model
 *
 * @method \App\Model\Entity\Cc3 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cc3 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cc3[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cc3|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cc3 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cc3[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cc3 findOrCreate($search, callable $callback = null, $options = [])
 */
class Cc3Table extends Table
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

        $this->setTable('cc3');
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->date('paid_date')
            ->requirePresence('paid_date', 'create')
            ->notEmpty('paid_date');

        $validator
            ->scalar('total_amount')
            ->maxLength('total_amount', 200)
            ->requirePresence('total_amount', 'create')
            ->notEmpty('total_amount');

        $validator
            ->scalar('payable_amount')
            ->maxLength('payable_amount', 200)
            ->requirePresence('payable_amount', 'create')
            ->notEmpty('payable_amount');

        $validator
            ->scalar('balance')
            ->maxLength('balance', 200)
            ->requirePresence('balance', 'create')
            ->notEmpty('balance');

        $validator
            ->scalar('old_balance')
            ->maxLength('old_balance', 200)
            ->requirePresence('old_balance', 'create')
            ->notEmpty('old_balance');

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
