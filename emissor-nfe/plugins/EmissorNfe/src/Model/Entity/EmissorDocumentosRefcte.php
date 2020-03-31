<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorDocumentosRefcte Entity
 *
 * @property int $id
 * @property int $emissor_documentos_id
 * @property string $chave
 *
 * @property \EmissorNfe\Model\Entity\EmissorDocumento $emissor_documento
 */
class EmissorDocumentosRefcte extends Entity
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
        'chave' => true,
        'emissor_documento' => true,
    ];
}
