<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposFormasPagamentosTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposFormasPagamentosTable Test Case
 */
class EmissorTiposFormasPagamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposFormasPagamentosTable
     */
    protected $EmissorTiposFormasPagamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposFormasPagamentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposFormasPagamentos') ? [] : ['className' => EmissorTiposFormasPagamentosTable::class];
        $this->EmissorTiposFormasPagamentos = TableRegistry::getTableLocator()->get('EmissorTiposFormasPagamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposFormasPagamentos);

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
}
