<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorImpostosIpiTable;

/**
 * EmissorNfe\Model\Table\EmissorImpostosIpiTable Test Case
 */
class EmissorImpostosIpiTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorImpostosIpiTable
     */
    protected $EmissorImpostosIpi;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorImpostosIpi',
        'plugin.EmissorNfe.Emitentes',
        'plugin.EmissorNfe.EmissorProdudosServicos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorImpostosIpi') ? [] : ['className' => EmissorImpostosIpiTable::class];
        $this->EmissorImpostosIpi = TableRegistry::getTableLocator()->get('EmissorImpostosIpi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorImpostosIpi);

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
