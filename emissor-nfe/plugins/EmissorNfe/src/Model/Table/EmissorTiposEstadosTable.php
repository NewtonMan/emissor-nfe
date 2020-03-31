<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorTiposEstados Model
 *
 * @property \EmissorNfe\Model\Table\EmissorTiposPaisTable&\Cake\ORM\Association\BelongsTo $EmissorTiposPais
 * @property \EmissorNfe\Model\Table\EmissorTiposCidadesTable&\Cake\ORM\Association\HasMany $EmissorTiposCidades
 *
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposEstado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorTiposEstadosTable extends Table
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

        $this->setTable('emissor_tipos_estados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('EmissorTiposPais', [
            'foreignKey' => 'emissor_tipos_pais_id',
            'className' => 'EmissorNfe.EmissorTiposPais',
        ]);
        $this->hasMany('EmissorTiposCidades', [
            'foreignKey' => 'emissor_tipos_estado_id',
            'className' => 'EmissorNfe.EmissorTiposCidades',
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
            ->scalar('nome')
            ->maxLength('nome', 75)
            ->allowEmptyString('nome');

        $validator
            ->scalar('UF')
            ->maxLength('UF', 2)
            ->allowEmptyString('UF');

        $validator
            ->integer('ibge')
            ->allowEmptyString('ibge');

        $validator
            ->scalar('ddd')
            ->maxLength('ddd', 50)
            ->allowEmptyString('ddd');

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
        $rules->add($rules->existsIn(['emissor_tipos_pais_id'], 'EmissorTiposPais'));

        return $rules;
    }
}
