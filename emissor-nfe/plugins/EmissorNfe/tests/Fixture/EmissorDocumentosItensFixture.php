<?php
declare(strict_types=1);

namespace EmissorNfe\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmissorDocumentosItensFixture
 */
class EmissorDocumentosItensFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'emissor_documentos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emissor_produtos_servicos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'uCom' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'qCom' => ['type' => 'decimal', 'length' => 19, 'precision' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vUnCom' => ['type' => 'decimal', 'length' => 31, 'precision' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'uTrib' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'qTrib' => ['type' => 'decimal', 'length' => 19, 'precision' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vUnTrib' => ['type' => 'decimal', 'length' => 31, 'precision' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vProd' => ['type' => 'decimal', 'length' => 17, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vFrete' => ['type' => 'decimal', 'length' => 17, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vSeg' => ['type' => 'decimal', 'length' => 17, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vDesc' => ['type' => 'decimal', 'length' => 17, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vOutro' => ['type' => 'decimal', 'length' => 17, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'indTot' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'emissor_documentos_id' => ['type' => 'index', 'columns' => ['emissor_documentos_id'], 'length' => []],
            'emissor_produtos_servicos_id' => ['type' => 'index', 'columns' => ['emissor_produtos_servicos_id'], 'length' => []],
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
                'emissor_documentos_id' => 1,
                'emissor_produtos_servicos_id' => 1,
                'uCom' => 'Lore',
                'qCom' => 1.5,
                'vUnCom' => 1.5,
                'uTrib' => 'Lore',
                'qTrib' => 1.5,
                'vUnTrib' => 1.5,
                'vProd' => 1.5,
                'vFrete' => 1.5,
                'vSeg' => 1.5,
                'vDesc' => 1.5,
                'vOutro' => 1.5,
                'indTot' => 1,
            ],
        ];
        parent::init();
    }
}
