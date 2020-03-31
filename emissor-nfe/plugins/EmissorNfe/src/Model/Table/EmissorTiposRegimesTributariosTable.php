<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorTiposRegimesTributarios Model
 *
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposRegimesTributario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorTiposRegimesTributariosTable extends Table
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

        $this->setTable('emissor_tipos_regimes_tributarios');
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
            ->integer('CRT')
            ->requirePresence('CRT', 'create')
            ->notEmptyString('CRT');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 80)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        return $validator;
    }
}
