<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorCadastrosDado Entity
 *
 * @property int $id
 * @property int|null $CNPJ
 * @property int|null $CPF
 * @property string|null $idEstrangeiro
 * @property string $xNome
 * @property string|null $fone
 * @property int $indIEDest
 * @property string $IE
 * @property string|null $ISUF
 * @property string|null $IM
 * @property string|null $email
 * @property string|null $logo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class EmissorCadastrosDado extends Entity
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
        'CNPJ' => true,
        'CPF' => true,
        'idEstrangeiro' => true,
        'xNome' => true,
        'fone' => true,
        'indIEDest' => true,
        'IE' => true,
        'ISUF' => true,
        'IM' => true,
        'email' => true,
        'logo' => true,
        'created' => true,
        'modified' => true,
    ];
}
