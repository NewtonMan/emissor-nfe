<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorDocumentosIten Entity
 *
 * @property int $id
 * @property int $emissor_documentos_id
 * @property int $emissor_produtos_servicos_id
 * @property string $uCom
 * @property string $qCom
 * @property string $vUnCom
 * @property string $uTrib
 * @property string $qTrib
 * @property string $vUnTrib
 * @property string $vProd
 * @property string $vFrete
 * @property string $vSeg
 * @property string $vDesc
 * @property string $vOutro
 * @property bool $indTot
 *
 * @property \EmissorNfe\Model\Entity\EmissorDocumento $emissor_documento
 * @property \EmissorNfe\Model\Entity\EmissorProdutosServico $emissor_produtos_servico
 */
class EmissorDocumentosIten extends Entity
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
        'emissor_documentos_id' => true,
        'emissor_produtos_servicos_id' => true,
        'uCom' => true,
        'qCom' => true,
        'vUnCom' => true,
        'uTrib' => true,
        'qTrib' => true,
        'vUnTrib' => true,
        'vProd' => true,
        'vFrete' => true,
        'vSeg' => true,
        'vDesc' => true,
        'vOutro' => true,
        'indTot' => true,
        'emissor_documento' => true,
        'emissor_produtos_servico' => true,
    ];
}
