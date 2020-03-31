<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorDocumentosTable;

/**
 * EmissorNfe\Model\Table\EmissorDocumentosTable Test Case
 */
class EmissorDocumentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorDocumentosTable
     */
    protected $EmissorDocumentos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorDocumentos',
        'plugin.EmissorNfe.Emitentes',
        'plugin.EmissorNfe.EmitenteEnderecos',
        'plugin.EmissorNfe.Destinatarios',
        'plugin.EmissorNfe.DestinatarioEnderecos',
        'plugin.EmissorNfe.RetiradaEnderecos',
        'plugin.EmissorNfe.EntregaEnderecos',
        'plugin.EmissorNfe.Transportadoras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorDocumentos') ? [] : ['className' => EmissorDocumentosTable::class];
        $this->EmissorDocumentos = TableRegistry::getTableLocator()->get('EmissorDocumentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorDocumentos);

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
