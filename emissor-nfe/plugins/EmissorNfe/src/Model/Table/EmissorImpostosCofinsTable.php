<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorImpostosCofins Model
 *
 * @property \EmissorNfe\Model\Table\EmitentesTable&\Cake\ORM\Association\BelongsTo $Emitentes
 *
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosCofin[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorImpostosCofinsTable extends Table
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

        $this->setTable('emissor_impostos_cofins');
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
            ->scalar('tipo_calculo')
            ->maxLength('tipo_calculo', 1)
            ->allowEmptyString('tipo_calculo');

        $validator
            ->scalar('CST')
            ->maxLength('CST', 2)
            ->allowEmptyString('CST');

        $validator
            ->numeric('vBC')
            ->allowEmptyString('vBC');

        $validator
            ->numeric('pCOFINS')
            ->allowEmptyString('pCOFINS');

        $validator
            ->numeric('vCOFINS')
            ->allowEmptyString('vCOFINS');

        $validator
            ->numeric('qBCProd')
            ->allowEmptyString('qBCProd');

        $validator
            ->numeric('vAliqProd')
            ->allowEmptyString('vAliqProd');

        $validator
            ->scalar('ST_tipo_calculo')
            ->maxLength('ST_tipo_calculo', 1)
            ->allowEmptyString('ST_tipo_calculo');

        $validator
            ->numeric('ST_vBC')
            ->allowEmptyString('ST_vBC');

        $validator
            ->numeric('ST_pCOFINS')
            ->allowEmptyString('ST_pCOFINS');

        $validator
            ->numeric('ST_vCOFINS')
            ->allowEmptyString('ST_vCOFINS');

        $validator
            ->numeric('ST_vBCProd')
            ->allowEmptyString('ST_vBCProd');

        $validator
            ->numeric('ST_vAliqProd')
            ->allowEmptyString('ST_vAliqProd');

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
