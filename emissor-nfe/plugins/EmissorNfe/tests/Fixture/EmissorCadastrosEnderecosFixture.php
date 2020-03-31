<?php
declare(strict_types=1);

namespace EmissorNfe\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmissorCadastrosEnderecosFixture
 */
class EmissorCadastrosEnderecosFixture extends TestFixture
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
        'tipo_endereco' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'xLgr' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'nro' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'xCpl' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'xBairro' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cMun' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'xMun' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'UF' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'CEP' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cPais' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'xPais' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'cMun' => ['type' => 'index', 'columns' => ['cMun'], 'length' => []],
            'cPais' => ['type' => 'index', 'columns' => ['cPais'], 'length' => []],
            'tipo_endereco' => ['type' => 'index', 'columns' => ['tipo_endereco'], 'length' => []],
            'emissor_cadastros_dados_id' => ['type' => 'index', 'columns' => ['emissor_cadastros_dados_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'emissor_cadastros_enderecos_ibfk_1' => ['type' => 'foreign', 'columns' => ['emissor_cadastros_dados_id'], 'references' => ['emissor_cadastros_dados', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'tipo_endereco' => 'Lorem ipsum dolor ',
                'xLgr' => 'Lorem ipsum dolor sit amet',
                'nro' => 'Lorem ipsum dolor sit amet',
                'xCpl' => 'Lorem ipsum dolor sit amet',
                'xBairro' => 'Lorem ipsum dolor sit amet',
                'cMun' => 1,
                'xMun' => 'Lorem ipsum dolor sit amet',
                'UF' => 'Lo',
                'CEP' => 'Lorem ',
                'cPais' => 'Lo',
                'xPais' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-03-31 00:34:37',
                'modified' => '2020-03-31 00:34:37',
            ],
        ];
        parent::init();
    }
}
