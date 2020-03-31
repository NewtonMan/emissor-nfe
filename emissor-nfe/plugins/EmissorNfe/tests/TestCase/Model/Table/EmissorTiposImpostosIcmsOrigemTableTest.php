<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposImpostosIcmsOrigemTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposImpostosIcmsOrigemTable Test Case
 */
class EmissorTiposImpostosIcmsOrigemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposImpostosIcmsOrigemTable
     */
    protected $EmissorTiposImpostosIcmsOrigem;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposImpostosIcmsOrigem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposImpostosIcmsOrigem') ? [] : ['className' => EmissorTiposImpostosIcmsOrigemTable::class];
        $this->EmissorTiposImpostosIcmsOrigem = TableRegistry::getTableLocator()->get('EmissorTiposImpostosIcmsOrigem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposImpostosIcmsOrigem);

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
