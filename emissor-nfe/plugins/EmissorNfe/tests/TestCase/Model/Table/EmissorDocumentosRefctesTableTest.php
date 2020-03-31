<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorDocumentosRefctesTable;

/**
 * EmissorNfe\Model\Table\EmissorDocumentosRefctesTable Test Case
 */
class EmissorDocumentosRefctesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorDocumentosRefctesTable
     */
    protected $EmissorDocumentosRefctes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorDocumentosRefctes',
        'plugin.EmissorNfe.EmissorDocumentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorDocumentosRefctes') ? [] : ['className' => EmissorDocumentosRefctesTable::class];
        $this->EmissorDocumentosRefctes = TableRegistry::getTableLocator()->get('EmissorDocumentosRefctes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorDocumentosRefctes);

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
