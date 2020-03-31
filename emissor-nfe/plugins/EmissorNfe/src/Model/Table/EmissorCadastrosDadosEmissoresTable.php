<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorCadastrosDadosEmissores Model
 *
 * @property \EmissorNfe\Model\Table\EmissorCadastrosDadosTable&\Cake\ORM\Association\BelongsTo $EmissorCadastrosDados
 * @property \EmissorNfe\Model\Table\EmissorTiposRegimesTributariosTable&\Cake\ORM\Association\BelongsTo $EmissorTiposRegimesTributarios
 *
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDadosEmissore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorCadastrosDadosEmissoresTable extends Table
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

        $this->setTable('emissor_cadastros_dados_emissores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('EmissorCadastrosDados', [
            'foreignKey' => 'emissor_cadastros_dados_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorCadastrosDados',
        ]);
        $this->belongsTo('EmissorTiposRegimesTributarios', [
            'foreignKey' => 'emissor_tipos_regimes_tributarios_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorTiposRegimesTributarios',
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
            ->scalar('cnae')
            ->maxLength('cnae', 20)
            ->requirePresence('cnae', 'create')
            ->notEmptyString('cnae');

        $validator
            ->integer('ultima_nf')
            ->requirePresence('ultima_nf', 'create')
            ->notEmptyString('ultima_nf');

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
        $rules->add($rules->existsIn(['emissor_cadastros_dados_id'], 'EmissorCadastrosDados'));
        $rules->add($rules->existsIn(['emissor_tipos_regimes_tributarios_id'], 'EmissorTiposRegimesTributarios'));

        return $rules;
    }
}
