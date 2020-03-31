<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorProdudosServico Entity
 *
 * @property int $id
 * @property int $emitente_id
 * @property string $cProd
 * @property string $cEAN
 * @property string $xProd
 * @property string $NCM
 * @property string $CEST
 * @property string $cBenef
 * @property string $EXTIPI
 * @property string $uCOM
 * @property string $uTrib
 * @property int|null $emissor_impostos_cofins_id
 * @property int|null $emissor_impostos_icms_id
 * @property int|null $emissor_impostos_ii_id
 * @property int|null $emissor_impostos_ipi_id
 * @property int|null $emissor_impostos_pis_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \EmissorNfe\Model\Entity\Emitente $emitente
 * @property \EmissorNfe\Model\Entity\EmissorImpostosCofin $emissor_impostos_cofin
 * @property \EmissorNfe\Model\Entity\EmissorImpostosIcm $emissor_impostos_icm
 * @property \EmissorNfe\Model\Entity\EmissorImpostosIi $emissor_impostos_ii
 * @property \EmissorNfe\Model\Entity\EmissorImpostosIpi $emissor_impostos_ipi
 * @property \EmissorNfe\Model\Entity\EmissorImpostosPi $emissor_impostos_pi
 */
class EmissorProdudosServico extends Entity
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
        'cProd' => true,
        'cEAN' => true,
        'xProd' => true,
        'NCM' => true,
        'CEST' => true,
        'cBenef' => true,
        'EXTIPI' => true,
        'uCOM' => true,
        'uTrib' => true,
        'emissor_impostos_cofins_id' => true,
        'emissor_impostos_icms_id' => true,
        'emissor_impostos_ii_id' => true,
        'emissor_impostos_ipi_id' => true,
        'emissor_impostos_pis_id' => true,
        'created' => true,
        'modified' => true,
        'emitente' => true,
        'emissor_impostos_cofin' => true,
        'emissor_impostos_icm' => true,
        'emissor_impostos_ii' => true,
        'emissor_impostos_ipi' => true,
        'emissor_impostos_pi' => true,
    ];
}
