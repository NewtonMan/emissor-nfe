<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorTiposImpostosIcmsCst Entity
 *
 * @property int $id
 * @property string $CST
 * @property string $descricao
 */
class EmissorTiposImpostosIcmsCst extends Entity
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
        'CST' => true,
        'descricao' => true,
    ];
}
