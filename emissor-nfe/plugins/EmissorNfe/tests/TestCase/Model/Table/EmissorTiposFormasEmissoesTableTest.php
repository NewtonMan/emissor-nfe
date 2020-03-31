<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposFormasEmissoesTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposFormasEmissoesTable Test Case
 */
class EmissorTiposFormasEmissoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposFormasEmissoesTable
     */
    protected $EmissorTiposFormasEmissoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposFormasEmissoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposFormasEmissoes') ? [] : ['className' => EmissorTiposFormasEmissoesTable::class];
        $this->EmissorTiposFormasEmissoes = TableRegistry::getTableLocator()->get('EmissorTiposFormasEmissoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposFormasEmissoes);

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
