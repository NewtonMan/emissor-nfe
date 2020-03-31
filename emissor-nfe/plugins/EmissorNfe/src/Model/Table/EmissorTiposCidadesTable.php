<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorTiposCidades Model
 *
 * @property \EmissorNfe\Model\Table\EmissorTiposEstadosTable&\Cake\ORM\Association\BelongsTo $EmissorTiposEstados
 *
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCidade[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorTiposCidadesTable extends Table
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

        $this->setTable('emissor_tipos_cidades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('EmissorTiposEstados', [
            'foreignKey' => 'emissor_tipos_estado_id',
            'className' => 'EmissorNfe.EmissorTiposEstados',
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
            ->scalar('xMun')
            ->maxLength('xMun', 120)
            ->allowEmptyString('xMun');

        $validator
            ->integer('cMun')
            ->allowEmptyString('cMun');

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
        $rules->add($rules->existsIn(['emissor_tipos_estado_id'], 'EmissorTiposEstados'));

        return $rules;
    }
}
