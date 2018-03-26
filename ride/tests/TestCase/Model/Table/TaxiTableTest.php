<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaxiTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaxiTable Test Case
 */
class TaxiTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaxiTable
     */
    public $Taxi;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.taxi'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Taxi') ? [] : ['className' => TaxiTable::class];
        $this->Taxi = TableRegistry::get('Taxi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Taxi);

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
