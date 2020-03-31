<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorImpostosPi Entity
 *
 * @property int $id
 * @property int $emitente_id
 * @property string $descricao
 * @property string|null $CST
 * @property string|null $tipo_calculo
 * @property float|null $vBC
 * @property float|null $pPIS
 * @property float|null $vPIS
 * @property float|null $qBCProd
 * @property float|null $vAliqProd
 * @property string|null $ST_tipo_calculo
 * @property float|null $ST_vBC
 * @property float|null $ST_pPIS
 * @property float|null $ST_vPIS
 * @property float|null $ST_qBCProd
 * @property float|null $ST_vAliqProd
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \EmissorNfe\Model\Entity\Emitente $emitente
 */
class EmissorImpostosPi extends Entity
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
        'CST' => true,
        'tipo_calculo' => true,
        'vBC' => true,
        'pPIS' => true,
        'vPIS' => true,
        'qBCProd' => true,
        'vAliqProd' => true,
        'ST_tipo_calculo' => true,
        'ST_vBC' => true,
        'ST_pPIS' => true,
        'ST_vPIS' => true,
        'ST_qBCProd' => true,
        'ST_vAliqProd' => true,
        'created' => true,
        'modified' => true,
        'emitente' => true,
    ];
}
