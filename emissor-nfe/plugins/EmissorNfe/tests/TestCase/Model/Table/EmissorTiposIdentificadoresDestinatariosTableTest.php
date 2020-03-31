<?php
declare(strict_types=1);

namespace EmissorNfe\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use EmissorNfe\Model\Table\EmissorTiposIdentificadoresDestinatariosTable;

/**
 * EmissorNfe\Model\Table\EmissorTiposIdentificadoresDestinatariosTable Test Case
 */
class EmissorTiposIdentificadoresDestinatariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \EmissorNfe\Model\Table\EmissorTiposIdentificadoresDestinatariosTable
     */
    protected $EmissorTiposIdentificadoresDestinatarios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.EmissorNfe.EmissorTiposIdentificadoresDestinatarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmissorTiposIdentificadoresDestinatarios') ? [] : ['className' => EmissorTiposIdentificadoresDestinatariosTable::class];
        $this->EmissorTiposIdentificadoresDestinatarios = TableRegistry::getTableLocator()->get('EmissorTiposIdentificadoresDestinatarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EmissorTiposIdentificadoresDestinatarios);

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
