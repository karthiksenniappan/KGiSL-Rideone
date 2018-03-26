<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tariff Model
 *
 * @method \App\Model\Entity\Tariff get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tariff newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tariff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tariff|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tariff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tariff[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tariff findOrCreate($search, callable $callback = null, $options = [])
 */
class TariffTable extends Table
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

        $this->setTable('tariff');
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
            ->scalar('car_model')
            ->maxLength('car_model', 200)
            ->requirePresence('car_model', 'create')
            ->notEmpty('car_model');

        $validator
            ->scalar('categories')
            ->maxLength('categories', 200)
            ->requirePresence('categories', 'create')
            ->notEmpty('categories');

        $validator
            ->scalar('tariff_type')
            ->maxLength('tariff_type', 200)
            ->requirePresence('tariff_type', 'create')
            ->notEmpty('tariff_type');

        $validator
            ->integer('minimum_amount')
            ->requirePresence('minimum_amount', 'create')
            ->notEmpty('minimum_amount');

        $validator
            ->integer('minimun_km')
            ->requirePresence('minimun_km', 'create')
            ->notEmpty('minimun_km');

        $validator
            ->integer('after_extra_amount')
            ->requirePresence('after_extra_amount', 'create')
            ->notEmpty('after_extra_amount');

        $validator
            ->integer('night_amount')
            ->requirePresence('night_amount', 'create')
            ->notEmpty('night_amount');

        return $validator;
    }
}
