<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emp Model
 *
 * @method \App\Model\Entity\Emp get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emp findOrCreate($search, callable $callback = null, $options = [])
 */
class EmpTable extends Table
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

        $this->setTable('emp');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 200)
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 200)
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->scalar('account')
            ->maxLength('account', 200)
            ->requirePresence('account', 'create')
            ->notEmpty('account');

        $validator
            ->scalar('department')
            ->maxLength('department', 200)
            ->requirePresence('department', 'create')
            ->notEmpty('department');

        $validator
            ->scalar('salary')
            ->maxLength('salary', 200)
            ->requirePresence('salary', 'create')
            ->notEmpty('salary');

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
