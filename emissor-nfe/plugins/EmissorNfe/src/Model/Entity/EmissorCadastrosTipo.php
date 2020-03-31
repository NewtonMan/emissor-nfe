<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorCadastrosTipo Entity
 *
 * @property int $id
 * @property int $emissor_cadastros_dados_id
 * @property int $emissor_tipos_cadastros_id
 *
 * @property \EmissorNfe\Model\Entity\EmissorCadastrosDado $emissor_cadastros_dado
 * @property \EmissorNfe\Model\Entity\EmissorTiposCadastro $emissor_tipos_cadastro
 */
class EmissorCadastrosTipo extends Entity
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
        'emissor_cadastros_dados_id' => true,
        'emissor_tipos_cadastros_id' => true,
        'emissor_cadastros_dado' => true,
        'emissor_tipos_cadastro' => true,
    ];
}
