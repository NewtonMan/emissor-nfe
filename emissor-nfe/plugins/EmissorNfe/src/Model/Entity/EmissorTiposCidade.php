<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorTiposCidade Entity
 *
 * @property int $id
 * @property string|null $xMun
 * @property int|null $emissor_tipos_estado_id
 * @property int|null $cMun
 *
 * @property \EmissorNfe\Model\Entity\EmissorTiposEstado $emissor_tipos_estado
 */
class EmissorTiposCidade extends Entity
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
        'xMun' => true,
        'emissor_tipos_estado_id' => true,
        'cMun' => true,
        'emissor_tipos_estado' => true,
    ];
}
