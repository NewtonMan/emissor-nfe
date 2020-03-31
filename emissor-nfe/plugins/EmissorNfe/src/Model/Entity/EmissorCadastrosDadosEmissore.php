<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorCadastrosDadosEmissore Entity
 *
 * @property int $id
 * @property int $emissor_cadastros_dados_id
 * @property int $emissor_tipos_regimes_tributarios_id
 * @property string $cnae
 * @property int $ultima_nf
 *
 * @property \EmissorNfe\Model\Entity\EmissorCadastrosDado $emissor_cadastros_dado
 * @property \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario $emissor_tipos_regimes_tributario
 */
class EmissorCadastrosDadosEmissore extends Entity
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
        'emissor_tipos_regimes_tributarios_id' => true,
        'cnae' => true,
        'ultima_nf' => true,
        'emissor_cadastros_dado' => true,
        'emissor_tipos_regimes_tributario' => true,
    ];
}
