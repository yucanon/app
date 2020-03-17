<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MAdminsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MAdminsTable Test Case
 */
class MAdminsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MAdminsTable
     */
    public $MAdmins;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MAdmins',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MAdmins') ? [] : ['className' => MAdminsTable::class];
        $this->MAdmins = TableRegistry::getTableLocator()->get('MAdmins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MAdmins);

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
