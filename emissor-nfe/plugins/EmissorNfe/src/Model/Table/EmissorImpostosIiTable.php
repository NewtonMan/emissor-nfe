<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorImpostosIi Model
 *
 * @property \EmissorNfe\Model\Table\EmitentesTable&\Cake\ORM\Association\BelongsTo $Emitentes
 * @property \EmissorNfe\Model\Table\EmissorProdudosServicosTable&\Cake\ORM\Association\HasMany $EmissorProdudosServicos
 *
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorImpostosIiTable extends Table
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

        $this->setTable('emissor_impostos_ii');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Emitentes', [
            'foreignKey' => 'emitente_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.Emitentes',
        ]);
        $this->hasMany('EmissorProdudosServicos', [
            'foreignKey' => 'emissor_impostos_ii_id',
            'className' => 'EmissorNfe.EmissorProdudosServicos',
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
            ->numeric('vBC')
            ->allowEmptyString('vBC');

        $validator
            ->numeric('vDespAdu')
            ->allowEmptyString('vDespAdu');

        $validator
            ->numeric('vII')
            ->allowEmptyString('vII');

        $validator
            ->numeric('vIOF')
            ->allowEmptyString('vIOF');

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
