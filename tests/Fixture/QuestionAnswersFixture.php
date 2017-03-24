<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionAnswersFixture
 *
 */
class QuestionAnswersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'QUESTION_ANSWER_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'QUESTION_ANSWER_QUESTION_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'QUESTION_ANSWER_ANSWER_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'QUESTION_ANSWER_IS_RIGHT_ANSWER' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'QUESTION_ANSWER_QUESTION_ID_idx' => ['type' => 'index', 'columns' => ['QUESTION_ANSWER_QUESTION_ID'], 'length' => []],
            'QUESTION_ANSWER_ANSWER_ID_idx' => ['type' => 'index', 'columns' => ['QUESTION_ANSWER_ANSWER_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['QUESTION_ANSWER_ID'], 'length' => []],
            'QUESTION_ANSWER_ANSWER_ID' => ['type' => 'foreign', 'columns' => ['QUESTION_ANSWER_ANSWER_ID'], 'references' => ['answers', 'ANSWER_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'QUESTION_ANSWER_QUESTION_ID' => ['type' => 'foreign', 'columns' => ['QUESTION_ANSWER_QUESTION_ID'], 'references' => ['questions', 'QUESTION_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'QUESTION_ANSWER_ID' => 1,
            'QUESTION_ANSWER_QUESTION_ID' => 1,
            'QUESTION_ANSWER_ANSWER_ID' => 1,
            'QUESTION_ANSWER_IS_RIGHT_ANSWER' => 1
        ],
    ];
}
