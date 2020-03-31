<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposRegimesTributariosTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposRegimesTributariosTable Test Case
 */
class EmissorTiposRegimesTributariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposRegimesTributariosTable
     */
    protected $EmissorTiposRegimesTributarios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposRegimesTributarios') ? [] : ['className' => EmissorTiposRegimesTributariosTable::class];
        $this->EmissorTiposRegimesTributarios = TableRegistry::getTableLocator()->get('EmissorTiposRegimesTributarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposRegimesTributarios);

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
