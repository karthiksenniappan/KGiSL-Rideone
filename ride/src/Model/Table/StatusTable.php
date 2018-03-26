<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Status Model
 *
 * @method \App\Model\Entity\Status get($primaryKey, $options = [])
 * @method \App\Model\Entity\Status newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Status[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Status|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Status patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Status[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Status findOrCreate($search, callable $callback = null, $options = [])
 */
class StatusTable extends Table
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

        $this->setTable('status');
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
            ->scalar('now_place')
            ->maxLength('now_place', 200)
            ->requirePresence('now_place', 'create')
            ->notEmpty('now_place');

        $validator
            ->scalar('total_count')
            ->maxLength('total_count', 200)
            ->requirePresence('total_count', 'create')
            ->notEmpty('total_count');

        $validator
            ->scalar('taxi_number')
            ->maxLength('taxi_number', 200)
            ->requirePresence('taxi_number', 'create')
            ->notEmpty('taxi_number');

        $validator
            ->scalar('taxi_status')
            ->maxLength('taxi_status', 200)
            ->requirePresence('taxi_status', 'create')
            ->notEmpty('taxi_status');

        $validator
            ->scalar('driver_status')
            ->maxLength('driver_status', 200)
            ->requirePresence('driver_status', 'create')
            ->notEmpty('driver_status');

        $validator
            ->scalar('travel_status')
            ->maxLength('travel_status', 200)
            ->requirePresence('travel_status', 'create')
            ->notEmpty('travel_status');

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
