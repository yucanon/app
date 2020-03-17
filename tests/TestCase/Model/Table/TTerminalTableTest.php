<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TTerminalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TTerminalTable Test Case
 */
class TTerminalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TTerminalTable
     */
    public $TTerminal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TTerminal',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TTerminal') ? [] : ['className' => TTerminalTable::class];
        $this->TTerminal = TableRegistry::getTableLocator()->get('TTerminal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TTerminal);

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
