<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorCadastrosEnderecos Model
 *
 * @property \EmissorNfe\Model\Table\EmissorCadastrosDadosTable&\Cake\ORM\Association\BelongsTo $EmissorCadastrosDados
 *
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosEndereco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorCadastrosEnderecosTable extends Table
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

        $this->setTable('emissor_cadastros_enderecos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EmissorCadastrosDados', [
            'foreignKey' => 'emissor_cadastros_dados_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorCadastrosDados',
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
            ->scalar('tipo_endereco')
            ->maxLength('tipo_endereco', 20)
            ->allowEmptyString('tipo_endereco');

        $validator
            ->scalar('xLgr')
            ->maxLength('xLgr', 60)
            ->requirePresence('xLgr', 'create')
            ->notEmptyString('xLgr');

        $validator
            ->scalar('nro')
            ->maxLength('nro', 60)
            ->requirePresence('nro', 'create')
            ->notEmptyString('nro');

        $validator
            ->scalar('xCpl')
            ->maxLength('xCpl', 60)
            ->allowEmptyString('xCpl');

        $validator
            ->scalar('xBairro')
            ->maxLength('xBairro', 60)
            ->requirePresence('xBairro', 'create')
            ->notEmptyString('xBairro');

        $validator
            ->integer('cMun')
            ->requirePresence('cMun', 'create')
            ->notEmptyString('cMun');

        $validator
            ->scalar('xMun')
            ->maxLength('xMun', 60)
            ->requirePresence('xMun', 'create')
            ->notEmptyString('xMun');

        $validator
            ->scalar('UF')
            ->maxLength('UF', 2)
            ->requirePresence('UF', 'create')
            ->notEmptyString('UF');

        $validator
            ->scalar('CEP')
            ->maxLength('CEP', 8)
            ->requirePresence('CEP', 'create')
            ->notEmptyString('CEP');

        $validator
            ->scalar('cPais')
            ->maxLength('cPais', 4)
            ->allowEmptyString('cPais');

        $validator
            ->scalar('xPais')
            ->maxLength('xPais', 60)
            ->allowEmptyString('xPais');

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

        return $rules;
    }
}
