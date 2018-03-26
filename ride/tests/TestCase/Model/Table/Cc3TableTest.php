<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Cc3Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Cc3Table Test Case
 */
class Cc3TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Cc3Table
     */
    public $Cc3;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cc3'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cc3') ? [] : ['className' => Cc3Table::class];
        $this->Cc3 = TableRegistry::get('Cc3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cc3);

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
