<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorCadastrosTipos Model
 *
 * @property \EmissorNfe\Model\Table\EmissorCadastrosDadosTable&\Cake\ORM\Association\BelongsTo $EmissorCadastrosDados
 * @property \EmissorNfe\Model\Table\EmissorTiposCadastrosTable&\Cake\ORM\Association\BelongsTo $EmissorTiposCadastros
 *
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosTipo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorCadastrosTiposTable extends Table
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

        $this->setTable('emissor_cadastros_tipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('EmissorCadastrosDados', [
            'foreignKey' => 'emissor_cadastros_dados_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorCadastrosDados',
        ]);
        $this->belongsTo('EmissorTiposCadastros', [
            'foreignKey' => 'emissor_tipos_cadastros_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorTiposCadastros',
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
        $rules->add($rules->existsIn(['emissor_tipos_cadastros_id'], 'EmissorTiposCadastros'));

        return $rules;
    }
}
