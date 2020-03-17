<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MTerminalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MTerminalsTable Test Case
 */
class MTerminalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MTerminalsTable
     */
    public $MTerminals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MTerminals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MTerminals') ? [] : ['className' => MTerminalsTable::class];
        $this->MTerminals = TableRegistry::getTableLocator()->get('MTerminals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MTerminals);

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
