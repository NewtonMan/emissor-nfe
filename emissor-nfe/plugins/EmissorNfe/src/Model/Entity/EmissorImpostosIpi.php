<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorImpostosIpi Entity
 *
 * @property int $id
 * @property int $emitente_id
 * @property string $descricao
 * @property string|null $clEnq
 * @property string|null $CNPJProd
 * @property string|null $cSelo
 * @property int|null $qSelo
 * @property string|null $cEnq
 * @property string|null $tipo_calculo
 * @property string|null $CST
 * @property float|null $vBC
 * @property float|null $pIPI
 * @property float|null $vIPI
 * @property float|null $qUnid
 * @property float|null $vUnid
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \EmissorNfe\Model\Entity\Emitente $emitente
 * @property \EmissorNfe\Model\Entity\EmissorProdudosServico[] $emissor_produdos_servicos
 */
class EmissorImpostosIpi extends Entity
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
        'clEnq' => true,
        'CNPJProd' => true,
        'cSelo' => true,
        'qSelo' => true,
        'cEnq' => true,
        'tipo_calculo' => true,
        'CST' => true,
        'vBC' => true,
        'pIPI' => true,
        'vIPI' => true,
        'qUnid' => true,
        'vUnid' => true,
        'created' => true,
        'modified' => true,
        'emitente' => true,
        'emissor_produdos_servicos' => true,
    ];
}
