<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposPresencasTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposPresencasTable Test Case
 */
class EmissorTiposPresencasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposPresencasTable
     */
    protected $EmissorTiposPresencas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposPresencas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposPresencas') ? [] : ['className' => EmissorTiposPresencasTable::class];
        $this->EmissorTiposPresencas = TableRegistry::getTableLocator()->get('EmissorTiposPresencas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposPresencas);

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
