<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorCadastrosEndereco Entity
 *
 * @property int $id
 * @property int $emissor_cadastros_dados_id
 * @property string|null $tipo_endereco
 * @property string $xLgr
 * @property string $nro
 * @property string|null $xCpl
 * @property string $xBairro
 * @property int $cMun
 * @property string $xMun
 * @property string $UF
 * @property string $CEP
 * @property string|null $cPais
 * @property string|null $xPais
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \EmissorNfe\Model\Entity\EmissorCadastrosDado $emissor_cadastros_dado
 */
class EmissorCadastrosEndereco extends Entity
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
        'tipo_endereco' => true,
        'xLgr' => true,
        'nro' => true,
        'xCpl' => true,
        'xBairro' => true,
        'cMun' => true,
        'xMun' => true,
        'UF' => true,
        'CEP' => true,
        'cPais' => true,
        'xPais' => true,
        'created' => true,
        'modified' => true,
        'emissor_cadastros_dado' => true,
    ];
}
