<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorTiposRicm Entity
 *
 * @property int $id
 * @property string $UF_origem
 * @property string $UF_destino
 * @property int $Aliquota
 */
class EmissorTiposRicm extends Entity
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
        'UF_origem' => true,
        'UF_destino' => true,
        'Aliquota' => true,
    ];
}
