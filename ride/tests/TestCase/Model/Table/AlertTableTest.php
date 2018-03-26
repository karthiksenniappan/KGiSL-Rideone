<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlertTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlertTable Test Case
 */
class AlertTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlertTable
     */
    public $Alert;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alert'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Alert') ? [] : ['className' => AlertTable::class];
        $this->Alert = TableRegistry::get('Alert', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Alert);

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
