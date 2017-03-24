<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClasseesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClasseesTable Test Case
 */
class ClasseesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClasseesTable
     */
    public $Classees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.classees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Classees') ? [] : ['className' => 'App\Model\Table\ClasseesTable'];
        $this->Classees = TableRegistry::get('Classees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Classees);

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
