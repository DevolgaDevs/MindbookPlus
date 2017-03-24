<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionChoicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionChoicesTable Test Case
 */
class QuestionChoicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionChoicesTable
     */
    public $QuestionChoices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.question_choices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuestionChoices') ? [] : ['className' => 'App\Model\Table\QuestionChoicesTable'];
        $this->QuestionChoices = TableRegistry::get('QuestionChoices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuestionChoices);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
