<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DloginTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DloginTable Test Case
 */
class DloginTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DloginTable
     */
    public $Dlogin;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dlogin'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dlogin') ? [] : ['className' => DloginTable::class];
        $this->Dlogin = TableRegistry::get('Dlogin', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dlogin);

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
