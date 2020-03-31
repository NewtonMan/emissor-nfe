<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposCidadesTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposCidadesTable Test Case
 */
class EmissorTiposCidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposCidadesTable
     */
    protected $EmissorTiposCidades;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposCidades',
        'plugin.EmissorNfe.EmissorTiposEstados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposCidades') ? [] : ['className' => EmissorTiposCidadesTable::class];
        $this->EmissorTiposCidades = TableRegistry::getTableLocator()->get('EmissorTiposCidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposCidades);

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
