<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorTiposCadastros Model
 *
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCadastro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorTiposCadastrosTable extends Table
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

        $this->setTable('emissor_tipos_cadastros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->maxLength('nome', 80)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome')
            ->add('nome', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['nome']));

        return $rules;
    }
}
