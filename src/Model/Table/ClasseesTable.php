<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classees Model
 *
 * @method \App\Model\Entity\Classee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Classee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classee findOrCreate($search, callable $callback = null, $options = [])
 */
class ClasseesTable extends Table
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

        $this->setTable('classees');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('classees');
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
            ->allowEmpty('name');

        return $validator;
    }
}
