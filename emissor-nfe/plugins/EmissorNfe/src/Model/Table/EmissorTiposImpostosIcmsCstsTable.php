<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorTiposImpostosIcmsCsts Model
 *
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposImpostosIcmsCst[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorTiposImpostosIcmsCstsTable extends Table
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

        $this->setTable('emissor_tipos_impostos_icms_csts');
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
            ->scalar('CST')
            ->maxLength('CST', 2)
            ->requirePresence('CST', 'create')
            ->notEmptyString('CST')
            ->add('CST', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 80)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

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
        $rules->add($rules->isUnique(['CST']));

        return $rules;
    }
}
