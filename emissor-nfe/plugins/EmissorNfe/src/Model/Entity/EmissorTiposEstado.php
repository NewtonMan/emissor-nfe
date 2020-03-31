<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorTiposEstado Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $UF
 * @property int|null $ibge
 * @property int|null $emissor_tipos_pais_id
 * @property string|null $ddd
 *
 * @property \EmissorNfe\Model\Entity\EmissorTiposPai $emissor_tipos_pai
 * @property \EmissorNfe\Model\Entity\EmissorTiposCidade[] $emissor_tipos_cidades
 */
class EmissorTiposEstado extends Entity
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
        'nome' => true,
        'UF' => true,
        'ibge' => true,
        'emissor_tipos_pais_id' => true,
        'ddd' => true,
        'emissor_tipos_pai' => true,
        'emissor_tipos_cidades' => true,
    ];
}
