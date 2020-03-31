<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposNotasFiscaisTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposNotasFiscaisTable Test Case
 */
class EmissorTiposNotasFiscaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposNotasFiscaisTable
     */
    protected $EmissorTiposNotasFiscais;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposNotasFiscais',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposNotasFiscais') ? [] : ['className' => EmissorTiposNotasFiscaisTable::class];
        $this->EmissorTiposNotasFiscais = TableRegistry::getTableLocator()->get('EmissorTiposNotasFiscais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposNotasFiscais);

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
