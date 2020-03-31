<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorDocumento Entity
 *
 * @property int $id
 * @property int $mod
 * @property int $serie
 * @property int $nNF
 * @property int $emitente_id
 * @property int $emitente_endereco_id
 * @property int $destinatario_id
 * @property int $destinatario_endereco_id
 * @property int|null $retirada_endereco_id
 * @property int|null $entrega_endereco_id
 * @property int $cNF
 * @property string $UF
 * @property \Cake\I18n\FrozenTime $dhEmi
 * @property \Cake\I18n\FrozenTime $dhSaiEnt
 * @property string $natOp
 * @property int $tpNF
 * @property int $idDest
 * @property int $cMunFG
 * @property int $tpImp
 * @property int $tpEmis
 * @property string $chave
 * @property int $cDV
 * @property int $tpAmb
 * @property int $finNFe
 * @property int $indFinal
 * @property int $indPres
 * @property int $procEmi
 * @property string $infCpl
 * @property int $modFrete
 * @property int|null $transportadora_id
 * @property string|resource|null $xml
 *
 * @property \EmissorNfe\Model\Entity\Emitente $emitente
 * @property \EmissorNfe\Model\Entity\EmitenteEndereco $emitente_endereco
 * @property \EmissorNfe\Model\Entity\Destinatario $destinatario
 * @property \EmissorNfe\Model\Entity\DestinatarioEndereco $destinatario_endereco
 * @property \EmissorNfe\Model\Entity\RetiradaEndereco $retirada_endereco
 * @property \EmissorNfe\Model\Entity\EntregaEndereco $entrega_endereco
 * @property \EmissorNfe\Model\Entity\Transportadora $transportadora
 */
class EmissorDocumento extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'mod' => true,
        'serie' => true,
        'nNF' => true,
        'emitente_id' => true,
        'emitente_endereco_id' => true,
        'destinatario_id' => true,
        'destinatario_endereco_id' => true,
        'retirada_endereco_id' => true,
        'entrega_endereco_id' => true,
        'cNF' => true,
        'UF' => true,
        'dhEmi' => true,
        'dhSaiEnt' => true,
        'natOp' => true,
        'tpNF' => true,
        'idDest' => true,
        'cMunFG' => true,
        'tpImp' => true,
        'tpEmis' => true,
        'chave' => true,
        'cDV' => true,
        'tpAmb' => true,
        'finNFe' => true,
        'indFinal' => true,
        'indPres' => true,
        'procEmi' => true,
        'infCpl' => true,
        'modFrete' => true,
        'transportadora_id' => true,
        'xml' => true,
        'emitente' => true,
        'emitente_endereco' => true,
        'destinatario' => true,
        'destinatario_endereco' => true,
        'retirada_endereco' => true,
        'entrega_endereco' => true,
        'transportadora' => true,
    ];
}
