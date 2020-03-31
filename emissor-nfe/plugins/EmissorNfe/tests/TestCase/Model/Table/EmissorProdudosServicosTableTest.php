<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorProdudosServicosTable;

/**
 * EmissorNfe\Model\Table\EmissorProdudosServicosTable Test Case
 */
class EmissorProdudosServicosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorProdudosServicosTable
     */
    protected $EmissorProdudosServicos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorProdudosServicos',
        'plugin.EmissorNfe.Emitentes',
        'plugin.EmissorNfe.EmissorImpostosCofins',
        'plugin.EmissorNfe.EmissorImpostosIcms',
        'plugin.EmissorNfe.EmissorImpostosIis',
        'plugin.EmissorNfe.EmissorImpostosIpis',
        'plugin.EmissorNfe.EmissorImpostosPis',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorProdudosServicos') ? [] : ['className' => EmissorProdudosServicosTable::class];
        $this->EmissorProdudosServicos = TableRegistry::getTableLocator()->get('EmissorProdudosServicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorProdudosServicos);

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
