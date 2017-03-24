<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sessions Model
 *
 * @method \App\Model\Entity\Session get($primaryKey, $options = [])
 * @method \App\Model\Entity\Session newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Session[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Session|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Session[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Session findOrCreate($search, callable $callback = null, $options = [])
 */
class SessionsTable extends Table
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

        $this->setTable('sessions');
        $this->setDisplayField('SESSION_ID');
        $this->setPrimaryKey('SESSION_ID');
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
            ->integer('SESSION_ID')
            ->allowEmpty('SESSION_ID', 'create');

        $validator
            ->allowEmpty('SESSION_NAME');

        $validator
            ->integer('SESSION_USER_ID')
            ->allowEmpty('SESSION_USER_ID');

        $validator
            ->dateTime('SESSION_DATE')
            ->allowEmpty('SESSION_DATE');

        $validator
            ->boolean('SESSION_HAS_QUESTIONS')
            ->allowEmpty('SESSION_HAS_QUESTIONS');

        return $validator;
    }
}
