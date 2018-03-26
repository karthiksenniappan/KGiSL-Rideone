<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Cccollection2Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Cccollection2Table Test Case
 */
class Cccollection2TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Cccollection2Table
     */
    public $Cccollection2;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cccollection2'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cccollection2') ? [] : ['className' => Cccollection2Table::class];
        $this->Cccollection2 = TableRegistry::get('Cccollection2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cccollection2);

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
