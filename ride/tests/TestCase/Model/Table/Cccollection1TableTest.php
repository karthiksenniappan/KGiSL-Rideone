<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Cccollection1Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Cccollection1Table Test Case
 */
class Cccollection1TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Cccollection1Table
     */
    public $Cccollection1;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cccollection1'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cccollection1') ? [] : ['className' => Cccollection1Table::class];
        $this->Cccollection1 = TableRegistry::get('Cccollection1', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cccollection1);

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
