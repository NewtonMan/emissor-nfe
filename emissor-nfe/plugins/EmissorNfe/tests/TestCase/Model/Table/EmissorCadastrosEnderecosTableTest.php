<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorCadastrosEnderecosTable;

/**
 * EmissorNfe\Model\Table\EmissorCadastrosEnderecosTable Test Case
 */
class EmissorCadastrosEnderecosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorCadastrosEnderecosTable
     */
    protected $EmissorCadastrosEnderecos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorCadastrosEnderecos',
        'plugin.EmissorNfe.EmissorCadastrosDados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorCadastrosEnderecos') ? [] : ['className' => EmissorCadastrosEnderecosTable::class];
        $this->EmissorCadastrosEnderecos = TableRegistry::getTableLocator()->get('EmissorCadastrosEnderecos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorCadastrosEnderecos);

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
