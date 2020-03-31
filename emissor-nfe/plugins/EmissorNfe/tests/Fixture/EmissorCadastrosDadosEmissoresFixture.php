<?php
declare(strict_types=1);

namespace EmissorNfe\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmissorCadastrosDadosEmissoresFixture
 */
class EmissorCadastrosDadosEmissoresFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'emissor_cadastros_dados_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emissor_tipos_regimes_tributarios_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cnae' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'ultima_nf' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'emissor_tipos_regimes_tributarios_id' => ['type' => 'index', 'columns' => ['emissor_tipos_regimes_tributarios_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'emissor_cadastros_dados_id' => ['type' => 'unique', 'columns' => ['emissor_cadastros_dados_id'], 'length' => []],
            'emissor_cadastros_dados_emissores_ibfk_1' => ['type' => 'foreign', 'columns' => ['emissor_cadastros_dados_id'], 'references' => ['emissor_cadastros_dados', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'emissor_cadastros_dados_emissores_ibfk_2' => ['type' => 'foreign', 'columns' => ['emissor_tipos_regimes_tributarios_id'], 'references' => ['emissor_tipos_regimes_tributarios', 'id'], 'update' => 'noAction', 'delete' => 'restrict', 'length' => []],
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
                'emissor_cadastros_dados_id' => 1,
                'emissor_tipos_regimes_tributarios_id' => 1,
                'cnae' => 'Lorem ipsum dolor ',
                'ultima_nf' => 1,
            ],
        ];
        parent::init();
    }
}
