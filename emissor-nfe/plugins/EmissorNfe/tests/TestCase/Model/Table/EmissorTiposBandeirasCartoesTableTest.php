<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposBandeirasCartoesTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposBandeirasCartoesTable Test Case
 */
class EmissorTiposBandeirasCartoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposBandeirasCartoesTable
     */
    protected $EmissorTiposBandeirasCartoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposBandeirasCartoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposBandeirasCartoes') ? [] : ['className' => EmissorTiposBandeirasCartoesTable::class];
        $this->EmissorTiposBandeirasCartoes = TableRegistry::getTableLocator()->get('EmissorTiposBandeirasCartoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposBandeirasCartoes);

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
