<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MProgramsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MProgramsTable Test Case
 */
class MProgramsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MProgramsTable
     */
    public $MPrograms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MPrograms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MPrograms') ? [] : ['className' => MProgramsTable::class];
        $this->MPrograms = TableRegistry::getTableLocator()->get('MPrograms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MPrograms);

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
