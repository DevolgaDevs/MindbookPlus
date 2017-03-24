<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuestionAnswers Model
 *
 * @method \App\Model\Entity\QuestionAnswer get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuestionAnswer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuestionAnswer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionAnswer findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestionAnswersTable extends Table
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

        $this->setTable('question_answers');
        $this->setDisplayField('QUESTION_ANSWER_ID');
        $this->setPrimaryKey('QUESTION_ANSWER_ID');
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
            ->integer('QUESTION_ANSWER_ID')
            ->allowEmpty('QUESTION_ANSWER_ID', 'create');

        $validator
            ->integer('QUESTION_ANSWER_QUESTION_ID')
            ->allowEmpty('QUESTION_ANSWER_QUESTION_ID');

        $validator
            ->integer('QUESTION_ANSWER_ANSWER_ID')
            ->allowEmpty('QUESTION_ANSWER_ANSWER_ID');

        $validator
            ->boolean('QUESTION_ANSWER_IS_RIGHT_ANSWER')
            ->allowEmpty('QUESTION_ANSWER_IS_RIGHT_ANSWER');

        return $validator;
    }
}
