<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposImpostosIcmsCstsTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposImpostosIcmsCstsTable Test Case
 */
class EmissorTiposImpostosIcmsCstsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposImpostosIcmsCstsTable
     */
    protected $EmissorTiposImpostosIcmsCsts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposImpostosIcmsCsts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposImpostosIcmsCsts') ? [] : ['className' => EmissorTiposImpostosIcmsCstsTable::class];
        $this->EmissorTiposImpostosIcmsCsts = TableRegistry::getTableLocator()->get('EmissorTiposImpostosIcmsCsts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposImpostosIcmsCsts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
