<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorImpostosCofinsTable;

/**
 * EmissorNfe\Model\Table\EmissorImpostosCofinsTable Test Case
 */
class EmissorImpostosCofinsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorImpostosCofinsTable
     */
    protected $EmissorImpostosCofins;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorImpostosCofins',
        'plugin.EmissorNfe.Emitentes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorImpostosCofins') ? [] : ['className' => EmissorImpostosCofinsTable::class];
        $this->EmissorImpostosCofins = TableRegistry::getTableLocator()->get('EmissorImpostosCofins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorImpostosCofins);

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
