<?php
declare(strict_types=1);

namespace EmissorNfe\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmissorCadastrosTiposFixture
 */
class EmissorCadastrosTiposFixture extends TestFixture
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
        'emissor_tipos_cadastros_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'emissor_cadastros_dados_id' => ['type' => 'index', 'columns' => ['emissor_cadastros_dados_id'], 'length' => []],
            'emissor_tipos_cadastros_id' => ['type' => 'index', 'columns' => ['emissor_tipos_cadastros_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'emissor_cadastros_tipos_ibfk_1' => ['type' => 'foreign', 'columns' => ['emissor_cadastros_dados_id'], 'references' => ['emissor_cadastros_dados', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'emissor_cadastros_tipos_ibfk_2' => ['type' => 'foreign', 'columns' => ['emissor_tipos_cadastros_id'], 'references' => ['emissor_tipos_cadastros', 'id'], 'update' => 'noAction', 'delete' => 'restrict', 'length' => []],
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
                'emissor_tipos_cadastros_id' => 1,
            ],
        ];
        parent::init();
    }
}
