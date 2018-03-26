<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alert Model
 *
 * @method \App\Model\Entity\Alert get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alert newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alert[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alert|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alert patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alert[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alert findOrCreate($search, callable $callback = null, $options = [])
 */
class AlertTable extends Table
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

        $this->setTable('alert');
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
            ->scalar('useremail')
            ->maxLength('useremail', 200)
            ->requirePresence('useremail', 'create')
            ->notEmpty('useremail');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 200)
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->scalar('car')
            ->maxLength('car', 200)
            ->requirePresence('car', 'create')
            ->notEmpty('car');

        $validator
            ->scalar('model')
            ->maxLength('model', 200)
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->scalar('tariff')
            ->maxLength('tariff', 200)
            ->requirePresence('tariff', 'create')
            ->notEmpty('tariff');

        $validator
            ->scalar('distance')
            ->maxLength('distance', 200)
            ->requirePresence('distance', 'create')
            ->notEmpty('distance');

        $validator
            ->scalar('amount')
            ->maxLength('amount', 200)
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        $validator
            ->scalar('night')
            ->maxLength('night', 200)
            ->requirePresence('night', 'create')
            ->notEmpty('night');

        $validator
            ->scalar('start_place')
            ->maxLength('start_place', 200)
            ->requirePresence('start_place', 'create')
            ->notEmpty('start_place');

        $validator
            ->scalar('end_place')
            ->maxLength('end_place', 200)
            ->requirePresence('end_place', 'create')
            ->notEmpty('end_place');

        $validator
            ->scalar('status')
            ->maxLength('status', 200)
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
