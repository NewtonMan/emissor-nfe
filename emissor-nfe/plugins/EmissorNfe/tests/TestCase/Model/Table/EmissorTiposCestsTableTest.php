<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposCestsTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposCestsTable Test Case
 */
class EmissorTiposCestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposCestsTable
     */
    protected $EmissorTiposCests;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposCests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposCests') ? [] : ['className' => EmissorTiposCestsTable::class];
        $this->EmissorTiposCests = TableRegistry::getTableLocator()->get('EmissorTiposCests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposCests);

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
