<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorProdudosServicos Model
 *
 * @property \EmissorNfe\Model\Table\EmitentesTable&\Cake\ORM\Association\BelongsTo $Emitentes
 * @property \EmissorNfe\Model\Table\EmissorImpostosCofinsTable&\Cake\ORM\Association\BelongsTo $EmissorImpostosCofins
 * @property \EmissorNfe\Model\Table\EmissorImpostosIcmsTable&\Cake\ORM\Association\BelongsTo $EmissorImpostosIcms
 * @property \EmissorNfe\Model\Table\EmissorImpostosIisTable&\Cake\ORM\Association\BelongsTo $EmissorImpostosIis
 * @property \EmissorNfe\Model\Table\EmissorImpostosIpisTable&\Cake\ORM\Association\BelongsTo $EmissorImpostosIpis
 * @property \EmissorNfe\Model\Table\EmissorImpostosPisTable&\Cake\ORM\Association\BelongsTo $EmissorImpostosPis
 *
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorProdudosServico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorProdudosServicosTable extends Table
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

        $this->setTable('emissor_produdos_servicos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Emitentes', [
            'foreignKey' => 'emitente_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.Emitentes',
        ]);
        $this->belongsTo('EmissorImpostosCofins', [
            'foreignKey' => 'emissor_impostos_cofins_id',
            'className' => 'EmissorNfe.EmissorImpostosCofins',
        ]);
        $this->belongsTo('EmissorImpostosIcms', [
            'foreignKey' => 'emissor_impostos_icms_id',
            'className' => 'EmissorNfe.EmissorImpostosIcms',
        ]);
        $this->belongsTo('EmissorImpostosIis', [
            'foreignKey' => 'emissor_impostos_ii_id',
            'className' => 'EmissorNfe.EmissorImpostosIis',
        ]);
        $this->belongsTo('EmissorImpostosIpis', [
            'foreignKey' => 'emissor_impostos_ipi_id',
            'className' => 'EmissorNfe.EmissorImpostosIpis',
        ]);
        $this->belongsTo('EmissorImpostosPis', [
            'foreignKey' => 'emissor_impostos_pis_id',
            'className' => 'EmissorNfe.EmissorImpostosPis',
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
            ->scalar('cProd')
            ->maxLength('cProd', 60)
            ->requirePresence('cProd', 'create')
            ->notEmptyString('cProd');

        $validator
            ->scalar('cEAN')
            ->maxLength('cEAN', 14)
            ->requirePresence('cEAN', 'create')
            ->notEmptyString('cEAN');

        $validator
            ->scalar('xProd')
            ->maxLength('xProd', 120)
            ->requirePresence('xProd', 'create')
            ->notEmptyString('xProd');

        $validator
            ->scalar('NCM')
            ->maxLength('NCM', 8)
            ->requirePresence('NCM', 'create')
            ->notEmptyString('NCM');

        $validator
            ->scalar('CEST')
            ->maxLength('CEST', 7)
            ->requirePresence('CEST', 'create')
            ->notEmptyString('CEST');

        $validator
            ->scalar('cBenef')
            ->maxLength('cBenef', 10)
            ->requirePresence('cBenef', 'create')
            ->notEmptyString('cBenef');

        $validator
            ->scalar('EXTIPI')
            ->maxLength('EXTIPI', 3)
            ->requirePresence('EXTIPI', 'create')
            ->notEmptyString('EXTIPI');

        $validator
            ->scalar('uCOM')
            ->maxLength('uCOM', 6)
            ->requirePresence('uCOM', 'create')
            ->notEmptyString('uCOM');

        $validator
            ->scalar('uTrib')
            ->maxLength('uTrib', 6)
            ->requirePresence('uTrib', 'create')
            ->notEmptyString('uTrib');

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
        $rules->add($rules->existsIn(['emissor_impostos_cofins_id'], 'EmissorImpostosCofins'));
        $rules->add($rules->existsIn(['emissor_impostos_icms_id'], 'EmissorImpostosIcms'));
        $rules->add($rules->existsIn(['emissor_impostos_ii_id'], 'EmissorImpostosIis'));
        $rules->add($rules->existsIn(['emissor_impostos_ipi_id'], 'EmissorImpostosIpis'));
        $rules->add($rules->existsIn(['emissor_impostos_pis_id'], 'EmissorImpostosPis'));

        return $rules;
    }
}
