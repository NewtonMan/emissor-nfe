<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorImpostosCofin Entity
 *
 * @property int $id
 * @property int $emitente_id
 * @property string $descricao
 * @property string|null $tipo_calculo
 * @property string|null $CST
 * @property float|null $vBC
 * @property float|null $pCOFINS
 * @property float|null $vCOFINS
 * @property float|null $qBCProd
 * @property float|null $vAliqProd
 * @property string|null $ST_tipo_calculo
 * @property float|null $ST_vBC
 * @property float|null $ST_pCOFINS
 * @property float|null $ST_vCOFINS
 * @property float|null $ST_vBCProd
 * @property float|null $ST_vAliqProd
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \EmissorNfe\Model\Entity\Emitente $emitente
 */
class EmissorImpostosCofin extends Entity
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
        'tipo_calculo' => true,
        'CST' => true,
        'vBC' => true,
        'pCOFINS' => true,
        'vCOFINS' => true,
        'qBCProd' => true,
        'vAliqProd' => true,
        'ST_tipo_calculo' => true,
        'ST_vBC' => true,
        'ST_pCOFINS' => true,
        'ST_vCOFINS' => true,
        'ST_vBCProd' => true,
        'ST_vAliqProd' => true,
        'created' => true,
        'modified' => true,
        'emitente' => true,
    ];
}
