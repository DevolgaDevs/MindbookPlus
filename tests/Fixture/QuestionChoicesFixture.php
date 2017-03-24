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
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'questionId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'answerId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'userId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'QUESTION_CHOICE_QUESTION_ID_idx' => ['type' => 'index', 'columns' => ['questionId'], 'length' => []],
            'QUESTION_CHOICE_ANSWER_ID_idx' => ['type' => 'index', 'columns' => ['answerId'], 'length' => []],
            'QUESTION_CHOICE_USER_ID_idx' => ['type' => 'index', 'columns' => ['userId'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'QUESTION_CHOICE_ANSWER_ID' => ['type' => 'foreign', 'columns' => ['answerId'], 'references' => ['answers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'QUESTION_CHOICE_QUESTION_ID' => ['type' => 'foreign', 'columns' => ['questionId'], 'references' => ['questions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'QUESTION_CHOICE_USER_ID' => ['type' => 'foreign', 'columns' => ['userId'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'questionId' => 1,
            'answerId' => 1,
            'userId' => 1
        ],
    ];
}
