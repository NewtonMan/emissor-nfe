<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorDocumentosVolumesTable;

/**
 * EmissorNfe\Model\Table\EmissorDocumentosVolumesTable Test Case
 */
class EmissorDocumentosVolumesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorDocumentosVolumesTable
     */
    protected $EmissorDocumentosVolumes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorDocumentosVolumes',
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
        $config = TableRegistry::getTableLocator()->exists('EmissorDocumentosVolumes') ? [] : ['className' => EmissorDocumentosVolumesTable::class];
        $this->EmissorDocumentosVolumes = TableRegistry::getTableLocator()->get('EmissorDocumentosVolumes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorDocumentosVolumes);

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
