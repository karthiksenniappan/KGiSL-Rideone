<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpTable Test Case
 */
class EmpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpTable
     */
    public $Emp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Emp') ? [] : ['className' => EmpTable::class];
        $this->Emp = TableRegistry::get('Emp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emp);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
