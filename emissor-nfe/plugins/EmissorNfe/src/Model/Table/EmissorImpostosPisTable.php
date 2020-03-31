<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorImpostosPis Model
 *
 * @property \EmissorNfe\Model\Table\EmitentesTable&\Cake\ORM\Association\BelongsTo $Emitentes
 *
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorImpostosPi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorImpostosPisTable extends Table
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

        $this->setTable('emissor_impostos_pis');
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
            ->scalar('CST')
            ->maxLength('CST', 2)
            ->allowEmptyString('CST');

        $validator
            ->scalar('tipo_calculo')
            ->maxLength('tipo_calculo', 1)
            ->allowEmptyString('tipo_calculo');

        $validator
            ->numeric('vBC')
            ->allowEmptyString('vBC');

        $validator
            ->numeric('pPIS')
            ->allowEmptyString('pPIS');

        $validator
            ->numeric('vPIS')
            ->allowEmptyString('vPIS');

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
            ->numeric('ST_pPIS')
            ->allowEmptyString('ST_pPIS');

        $validator
            ->numeric('ST_vPIS')
            ->allowEmptyString('ST_vPIS');

        $validator
            ->numeric('ST_qBCProd')
            ->allowEmptyString('ST_qBCProd');

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
