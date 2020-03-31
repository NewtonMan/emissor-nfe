<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposIdentificadoresDestinosOperacoesTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposIdentificadoresDestinosOperacoesTable Test Case
 */
class EmissorTiposIdentificadoresDestinosOperacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposIdentificadoresDestinosOperacoesTable
     */
    protected $EmissorTiposIdentificadoresDestinosOperacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposIdentificadoresDestinosOperacoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposIdentificadoresDestinosOperacoes') ? [] : ['className' => EmissorTiposIdentificadoresDestinosOperacoesTable::class];
        $this->EmissorTiposIdentificadoresDestinosOperacoes = TableRegistry::getTableLocator()->get('EmissorTiposIdentificadoresDestinosOperacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposIdentificadoresDestinosOperacoes);

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
