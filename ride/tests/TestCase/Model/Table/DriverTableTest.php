<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DriverTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DriverTable Test Case
 */
class DriverTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DriverTable
     */
    public $Driver;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.driver'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Driver') ? [] : ['className' => DriverTable::class];
        $this->Driver = TableRegistry::get('Driver', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Driver);

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
