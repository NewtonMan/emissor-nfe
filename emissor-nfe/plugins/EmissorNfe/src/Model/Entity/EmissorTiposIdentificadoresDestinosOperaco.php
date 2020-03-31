<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorTiposIdentificadoresDestinosOperaco Entity
 *
 * @property int $id
 * @property int $idDest
 * @property string $descricao
 */
class EmissorTiposIdentificadoresDestinosOperaco extends Entity
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
        'idDest' => true,
        'descricao' => true,
    ];
}
