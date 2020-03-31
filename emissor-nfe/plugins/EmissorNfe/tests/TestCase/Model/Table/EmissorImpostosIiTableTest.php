<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorImpostosIiTable;

/**
 * EmissorNfe\Model\Table\EmissorImpostosIiTable Test Case
 */
class EmissorImpostosIiTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorImpostosIiTable
     */
    protected $EmissorImpostosIi;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorImpostosIi',
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
        $config = TableRegistry::getTableLocator()->exists('EmissorImpostosIi') ? [] : ['className' => EmissorImpostosIiTable::class];
        $this->EmissorImpostosIi = TableRegistry::getTableLocator()->get('EmissorImpostosIi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorImpostosIi);

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
