<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorCadastrosTiposTable;

/**
 * EmissorNfe\Model\Table\EmissorCadastrosTiposTable Test Case
 */
class EmissorCadastrosTiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorCadastrosTiposTable
     */
    protected $EmissorCadastrosTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorCadastrosTipos',
        'plugin.EmissorNfe.EmissorCadastrosDados',
        'plugin.EmissorNfe.EmissorTiposCadastros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorCadastrosTipos') ? [] : ['className' => EmissorCadastrosTiposTable::class];
        $this->EmissorCadastrosTipos = TableRegistry::getTableLocator()->get('EmissorCadastrosTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorCadastrosTipos);

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
