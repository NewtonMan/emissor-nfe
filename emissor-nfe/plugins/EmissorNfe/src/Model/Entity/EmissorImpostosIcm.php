<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmissorImpostosIcm Entity
 *
 * @property int $id
 * @property int $emitente_id
 * @property string $descricao
 * @property string $orig
 * @property string $CST
 * @property string|null $modBC
 * @property float|null $pRedBC
 * @property float|null $vBC
 * @property float|null $pICMS
 * @property float|null $vICMS
 * @property string|null $modBCST
 * @property float|null $pMVAST
 * @property float|null $pRedBCST
 * @property float|null $vBCST
 * @property float|null $pICMSST
 * @property float|null $vICMSST
 * @property float|null $vBCSTRet
 * @property float|null $vICMSSTRet
 * @property float|null $vBCSTDest
 * @property float|null $vICMSSTDest
 * @property float|null $vDesICMS
 * @property string|null $motDesICMS
 * @property float|null $vDesICMSST
 * @property int|null $motDesICMSST
 * @property float|null $pBCOp
 * @property string|null $UFST
 * @property float|null $pCredSN
 * @property float|null $vCredICMSSN
 * @property float|null $vICMSOp
 * @property float|null $pDif
 * @property float|null $vICMSDif
 * @property float|null $vBCICMSST_retido_ant
 * @property float|null $vICMSST_retido_ant
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \EmissorNfe\Model\Entity\Emitente $emitente
 */
class EmissorImpostosIcm extends Entity
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
        'emitente_id' => true,
        'descricao' => true,
        'orig' => true,
        'CST' => true,
        'modBC' => true,
        'pRedBC' => true,
        'vBC' => true,
        'pICMS' => true,
        'vICMS' => true,
        'modBCST' => true,
        'pMVAST' => true,
        'pRedBCST' => true,
        'vBCST' => true,
        'pICMSST' => true,
        'vICMSST' => true,
        'vBCSTRet' => true,
        'vICMSSTRet' => true,
        'vBCSTDest' => true,
        'vICMSSTDest' => true,
        'vDesICMS' => true,
        'motDesICMS' => true,
        'vDesICMSST' => true,
        'motDesICMSST' => true,
        'pBCOp' => true,
        'UFST' => true,
        'pCredSN' => true,
        'vCredICMSSN' => true,
        'vICMSOp' => true,
        'pDif' => true,
        'vICMSDif' => true,
        'vBCICMSST_retido_ant' => true,
        'vICMSST_retido_ant' => true,
        'created' => true,
        'modified' => true,
        'emitente' => true,
    ];
}
