<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposPaisesTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposPaisesTable Test Case
 */
class EmissorTiposPaisesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposPaisesTable
     */
    protected $EmissorTiposPaises;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposPaises',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposPaises') ? [] : ['className' => EmissorTiposPaisesTable::class];
        $this->EmissorTiposPaises = TableRegistry::getTableLocator()->get('EmissorTiposPaises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposPaises);

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
