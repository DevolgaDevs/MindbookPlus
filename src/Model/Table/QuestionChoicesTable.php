<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuestionChoices Model
 *
 * @method \App\Model\Entity\QuestionChoice get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuestionChoice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuestionChoice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuestionChoice|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuestionChoice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionChoice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionChoice findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestionChoicesTable extends Table
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

        $this->setTable('question_choices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasOne('questions');
        $this->hasOne('answers');
        $this->hasOne('users');
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
            ->integer('questionId')
            ->allowEmpty('questionId');

        $validator
            ->integer('answerId')
            ->allowEmpty('answerId');

        $validator
            ->integer('userId')
            ->allowEmpty('userId');

        return $validator;
    }
}
