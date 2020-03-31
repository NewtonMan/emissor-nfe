<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorCadastrosDadosEmissoresTable;

/**
 * EmissorNfe\Model\Table\EmissorCadastrosDadosEmissoresTable Test Case
 */
class EmissorCadastrosDadosEmissoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorCadastrosDadosEmissoresTable
     */
    protected $EmissorCadastrosDadosEmissores;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorCadastrosDadosEmissores',
        'plugin.EmissorNfe.EmissorCadastrosDados',
        'plugin.EmissorNfe.EmissorTiposRegimesTributarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorCadastrosDadosEmissores') ? [] : ['className' => EmissorCadastrosDadosEmissoresTable::class];
        $this->EmissorCadastrosDadosEmissores = TableRegistry::getTableLocator()->get('EmissorCadastrosDadosEmissores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorCadastrosDadosEmissores);

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
