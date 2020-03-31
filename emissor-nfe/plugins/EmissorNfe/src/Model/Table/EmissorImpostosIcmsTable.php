<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorImpostosIcms Model
 *
 * @property \EmissorNfe\Model\Table\EmitentesTable&\Cake\ORM\Association\BelongsTo $Emitentes
 *
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIcm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorImpostosIcmsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('emissor_impostos_icms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Emitentes', [
            'foreignKey' => 'emitente_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.Emitentes',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 100)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('orig')
            ->maxLength('orig', 1)
            ->requirePresence('orig', 'create')
            ->notEmptyString('orig');

        $validator
            ->scalar('CST')
            ->maxLength('CST', 3)
            ->requirePresence('CST', 'create')
            ->notEmptyString('CST');

        $validator
            ->scalar('modBC')
            ->maxLength('modBC', 1)
            ->allowEmptyString('modBC');

        $validator
            ->numeric('pRedBC')
            ->allowEmptyString('pRedBC');

        $validator
            ->numeric('vBC')
            ->allowEmptyString('vBC');

        $validator
            ->numeric('pICMS')
            ->allowEmptyString('pICMS');

        $validator
            ->numeric('vICMS')
            ->allowEmptyString('vICMS');

        $validator
            ->scalar('modBCST')
            ->maxLength('modBCST', 1)
            ->allowEmptyString('modBCST');

        $validator
            ->numeric('pMVAST')
            ->allowEmptyString('pMVAST');

        $validator
            ->numeric('pRedBCST')
            ->allowEmptyString('pRedBCST');

        $validator
            ->numeric('vBCST')
            ->allowEmptyString('vBCST');

        $validator
            ->numeric('pICMSST')
            ->allowEmptyString('pICMSST');

        $validator
            ->numeric('vICMSST')
            ->allowEmptyString('vICMSST');

        $validator
            ->numeric('vBCSTRet')
            ->allowEmptyString('vBCSTRet');

        $validator
            ->numeric('vICMSSTRet')
            ->allowEmptyString('vICMSSTRet');

        $validator
            ->numeric('vBCSTDest')
            ->allowEmptyString('vBCSTDest');

        $validator
            ->numeric('vICMSSTDest')
            ->allowEmptyString('vICMSSTDest');

        $validator
            ->numeric('vDesICMS')
            ->allowEmptyString('vDesICMS');

        $validator
            ->scalar('motDesICMS')
            ->maxLength('motDesICMS', 1)
            ->allowEmptyString('motDesICMS');

        $validator
            ->numeric('vDesICMSST')
            ->allowEmptyString('vDesICMSST');

        $validator
            ->integer('motDesICMSST')
            ->allowEmptyString('motDesICMSST');

        $validator
            ->numeric('pBCOp')
            ->allowEmptyString('pBCOp');

        $validator
            ->scalar('UFST')
            ->maxLength('UFST', 2)
            ->allowEmptyString('UFST');

        $validator
            ->numeric('pCredSN')
            ->allowEmptyString('pCredSN');

        $validator
            ->numeric('vCredICMSSN')
            ->allowEmptyString('vCredICMSSN');

        $validator
            ->numeric('vICMSOp')
            ->allowEmptyString('vICMSOp');

        $validator
            ->numeric('pDif')
            ->allowEmptyString('pDif');

        $validator
            ->numeric('vICMSDif')
            ->allowEmptyString('vICMSDif');

        $validator
            ->numeric('vBCICMSST_retido_ant')
            ->allowEmptyString('vBCICMSST_retido_ant');

        $validator
            ->numeric('vICMSST_retido_ant')
            ->allowEmptyString('vICMSST_retido_ant');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['emitente_id'], 'Emitentes'));

        return $rules;
    }
}
