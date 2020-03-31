<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorDocumentosRefnfesTable;

/**
 * EmissorNfe\Model\Table\EmissorDocumentosRefnfesTable Test Case
 */
class EmissorDocumentosRefnfesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorDocumentosRefnfesTable
     */
    protected $EmissorDocumentosRefnfes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorDocumentosRefnfes',
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
        $config = TableRegistry::getTableLocator()->exists('EmissorDocumentosRefnfes') ? [] : ['className' => EmissorDocumentosRefnfesTable::class];
        $this->EmissorDocumentosRefnfes = TableRegistry::getTableLocator()->get('EmissorDocumentosRefnfes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorDocumentosRefnfes);

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
