<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorDocumentosItensTable;

/**
 * EmissorNfe\Model\Table\EmissorDocumentosItensTable Test Case
 */
class EmissorDocumentosItensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorDocumentosItensTable
     */
    protected $EmissorDocumentosItens;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorDocumentosItens',
        'plugin.EmissorNfe.EmissorDocumentos',
        'plugin.EmissorNfe.EmissorProdutosServicos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorDocumentosItens') ? [] : ['className' => EmissorDocumentosItensTable::class];
        $this->EmissorDocumentosItens = TableRegistry::getTableLocator()->get('EmissorDocumentosItens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorDocumentosItens);

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
