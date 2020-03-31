<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposProcessosEmissoesTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposProcessosEmissoesTable Test Case
 */
class EmissorTiposProcessosEmissoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposProcessosEmissoesTable
     */
    protected $EmissorTiposProcessosEmissoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposProcessosEmissoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposProcessosEmissoes') ? [] : ['className' => EmissorTiposProcessosEmissoesTable::class];
        $this->EmissorTiposProcessosEmissoes = TableRegistry::getTableLocator()->get('EmissorTiposProcessosEmissoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposProcessosEmissoes);

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
