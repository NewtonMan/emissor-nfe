<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorImpostosIi Entity
 *
 * @property int $id
 * @property int $emitente_id
 * @property string $descricao
 * @property float|null $vBC
 * @property float|null $vDespAdu
 * @property float|null $vII
 * @property float|null $vIOF
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \EmissorNfe\Model\Entity\Emitente $emitente
 * @property \EmissorNfe\Model\Entity\EmissorProdudosServico[] $emissor_produdos_servicos
 */
class EmissorImpostosIi extends Entity
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
        'emitente_id' => true,
        'descricao' => true,
        'vBC' => true,
        'vDespAdu' => true,
        'vII' => true,
        'vIOF' => true,
        'created' => true,
        'modified' => true,
        'emitente' => true,
        'emissor_produdos_servicos' => true,
    ];
}
