<?php
declare(strict_types=1);

namespace EmissorNfe\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmissorDocumentosFixture
 */
class EmissorDocumentosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'mod' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'serie' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nNF' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emitente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emitente_endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'destinatario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'destinatario_endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'retirada_endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'entrega_endereco_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cNF' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'UF' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'dhEmi' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'dhSaiEnt' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'natOp' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'tpNF' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idDest' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cMunFG' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tpImp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tpEmis' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'chave' => ['type' => 'string', 'length' => 44, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'cDV' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tpAmb' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'finNFe' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'indFinal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'indPres' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'procEmi' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'infCpl' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'modFrete' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'transportadora_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'xml' => ['type' => 'binary', 'length' => 4294967295, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'emitente_id' => ['type' => 'index', 'columns' => ['emitente_id'], 'length' => []],
            'emitente_endereco_id' => ['type' => 'index', 'columns' => ['emitente_endereco_id'], 'length' => []],
            'destinatario_id' => ['type' => 'index', 'columns' => ['destinatario_id'], 'length' => []],
            'destinatario_endereco_id' => ['type' => 'index', 'columns' => ['destinatario_endereco_id'], 'length' => []],
            'retirada_endereco_id' => ['type' => 'index', 'columns' => ['retirada_endereco_id'], 'length' => []],
            'entrega_endereco_id' => ['type' => 'index', 'columns' => ['entrega_endereco_id'], 'length' => []],
            'mod' => ['type' => 'index', 'columns' => ['mod'], 'length' => []],
            'serie' => ['type' => 'index', 'columns' => ['serie'], 'length' => []],
            'nNF' => ['type' => 'index', 'columns' => ['nNF'], 'length' => []],
            'cNF' => ['type' => 'index', 'columns' => ['cNF'], 'length' => []],
            'tpNF' => ['type' => 'index', 'columns' => ['tpNF'], 'length' => []],
            'tpEmis' => ['type' => 'index', 'columns' => ['tpEmis'], 'length' => []],
            'chave' => ['type' => 'index', 'columns' => ['chave'], 'length' => []],
            'tpAmb' => ['type' => 'index', 'columns' => ['tpAmb'], 'length' => []],
            'finNFe' => ['type' => 'index', 'columns' => ['finNFe'], 'length' => []],
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
                'mod' => 1,
                'serie' => 1,
                'nNF' => 1,
                'emitente_id' => 1,
                'emitente_endereco_id' => 1,
                'destinatario_id' => 1,
                'destinatario_endereco_id' => 1,
                'retirada_endereco_id' => 1,
                'entrega_endereco_id' => 1,
                'cNF' => 1,
                'UF' => 'Lo',
                'dhEmi' => '2020-03-31 00:34:37',
                'dhSaiEnt' => '2020-03-31 00:34:37',
                'natOp' => 'Lorem ipsum dolor sit amet',
                'tpNF' => 1,
                'idDest' => 1,
                'cMunFG' => 1,
                'tpImp' => 1,
                'tpEmis' => 1,
                'chave' => 'Lorem ipsum dolor sit amet',
                'cDV' => 1,
                'tpAmb' => 1,
                'finNFe' => 1,
                'indFinal' => 1,
                'indPres' => 1,
                'procEmi' => 1,
                'infCpl' => 'Lorem ipsum dolor sit amet',
                'modFrete' => 1,
                'transportadora_id' => 1,
                'xml' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
