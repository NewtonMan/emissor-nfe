<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorImpostosIpi Model
 *
 * @property \EmissorNfe\Model\Table\EmitentesTable&\Cake\ORM\Association\BelongsTo $Emitentes
 * @property \EmissorNfe\Model\Table\EmissorProdudosServicosTable&\Cake\ORM\Association\HasMany $EmissorProdudosServicos
 *
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosIpi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorImpostosIpiTable extends Table
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

        $this->setTable('emissor_impostos_ipi');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Emitentes', [
            'foreignKey' => 'emitente_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.Emitentes',
        ]);
        $this->hasMany('EmissorProdudosServicos', [
            'foreignKey' => 'emissor_impostos_ipi_id',
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
            ->scalar('clEnq')
            ->maxLength('clEnq', 5)
            ->allowEmptyString('clEnq');

        $validator
            ->scalar('CNPJProd')
            ->maxLength('CNPJProd', 20)
            ->allowEmptyString('CNPJProd');

        $validator
            ->scalar('cSelo')
            ->maxLength('cSelo', 60)
            ->allowEmptyString('cSelo');

        $validator
            ->integer('qSelo')
            ->allowEmptyString('qSelo');

        $validator
            ->scalar('cEnq')
            ->maxLength('cEnq', 3)
            ->allowEmptyString('cEnq');

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
            ->numeric('pIPI')
            ->allowEmptyString('pIPI');

        $validator
            ->numeric('vIPI')
            ->allowEmptyString('vIPI');

        $validator
            ->numeric('qUnid')
            ->allowEmptyString('qUnid');

        $validator
            ->numeric('vUnid')
            ->allowEmptyString('vUnid');

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
