<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionChoicesFixture
 *
 */
class QuestionChoicesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'QUESTION_CHOICE_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'QUESTION_CHOICE_QUESTION_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'QUESTION_CHOICE_ANSWER_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'QUESTION_CHOICE_USER_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'QUESTION_CHOICE_QUESTION_ID_idx' => ['type' => 'index', 'columns' => ['QUESTION_CHOICE_QUESTION_ID'], 'length' => []],
            'QUESTION_CHOICE_ANSWER_ID_idx' => ['type' => 'index', 'columns' => ['QUESTION_CHOICE_ANSWER_ID'], 'length' => []],
            'QUESTION_CHOICE_USER_ID_idx' => ['type' => 'index', 'columns' => ['QUESTION_CHOICE_USER_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['QUESTION_CHOICE_ID'], 'length' => []],
            'QUESTION_CHOICE_ANSWER_ID' => ['type' => 'foreign', 'columns' => ['QUESTION_CHOICE_ANSWER_ID'], 'references' => ['answers', 'ANSWER_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'QUESTION_CHOICE_QUESTION_ID' => ['type' => 'foreign', 'columns' => ['QUESTION_CHOICE_QUESTION_ID'], 'references' => ['questions', 'QUESTION_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'QUESTION_CHOICE_USER_ID' => ['type' => 'foreign', 'columns' => ['QUESTION_CHOICE_USER_ID'], 'references' => ['users', 'USER_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'QUESTION_CHOICE_ID' => 1,
            'QUESTION_CHOICE_QUESTION_ID' => 1,
            'QUESTION_CHOICE_ANSWER_ID' => 1,
            'QUESTION_CHOICE_USER_ID' => 1
        ],
    ];
}
