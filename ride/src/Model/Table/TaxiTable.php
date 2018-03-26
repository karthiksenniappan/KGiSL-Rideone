<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Taxi Model
 *
 * @method \App\Model\Entity\Taxi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Taxi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Taxi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Taxi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Taxi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Taxi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Taxi findOrCreate($search, callable $callback = null, $options = [])
 */
class TaxiTable extends Table
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

        $this->setTable('taxi');
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
            ->scalar('car_name')
            ->maxLength('car_name', 200)
            ->requirePresence('car_name', 'create')
            ->notEmpty('car_name');

        $validator
            ->scalar('model')
            ->maxLength('model', 200)
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->scalar('taxi_number')
            ->maxLength('taxi_number', 200)
            ->requirePresence('taxi_number', 'create')
            ->notEmpty('taxi_number');

        return $validator;
    }
}
