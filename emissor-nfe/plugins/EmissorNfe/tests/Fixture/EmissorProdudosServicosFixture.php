<?php
declare(strict_types=1);

namespace EmissorNfe\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmissorProdudosServicosFixture
 */
class EmissorProdudosServicosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'emitente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cProd' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cEAN' => ['type' => 'string', 'length' => 14, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'xProd' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'NCM' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'CEST' => ['type' => 'string', 'length' => 7, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cBenef' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'EXTIPI' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'uCOM' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'uTrib' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'emissor_impostos_cofins_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emissor_impostos_icms_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emissor_impostos_ii_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emissor_impostos_ipi_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emissor_impostos_pis_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'emitente_id' => ['type' => 'index', 'columns' => ['emitente_id'], 'length' => []],
            'emissor_impostos_cofins_id' => ['type' => 'index', 'columns' => ['emissor_impostos_cofins_id'], 'length' => []],
            'emissor_impostos_icms_id' => ['type' => 'index', 'columns' => ['emissor_impostos_icms_id'], 'length' => []],
            'emissor_impostos_ii_id' => ['type' => 'index', 'columns' => ['emissor_impostos_ii_id'], 'length' => []],
            'emissor_impostos_ipi_id' => ['type' => 'index', 'columns' => ['emissor_impostos_ipi_id'], 'length' => []],
            'emissor_impostos_pis_id' => ['type' => 'index', 'columns' => ['emissor_impostos_pis_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'emitente_id' => 1,
                'cProd' => 'Lorem ipsum dolor sit amet',
                'cEAN' => 'Lorem ipsum ',
                'xProd' => 'Lorem ipsum dolor sit amet',
                'NCM' => 'Lorem ',
                'CEST' => 'Lorem',
                'cBenef' => 'Lorem ip',
                'EXTIPI' => 'L',
                'uCOM' => 'Lore',
                'uTrib' => 'Lore',
                'emissor_impostos_cofins_id' => 1,
                'emissor_impostos_icms_id' => 1,
                'emissor_impostos_ii_id' => 1,
                'emissor_impostos_ipi_id' => 1,
                'emissor_impostos_pis_id' => 1,
                'created' => '2020-03-31 00:34:37',
                'modified' => '2020-03-31 00:34:37',
            ],
        ];
        parent::init();
    }
}
