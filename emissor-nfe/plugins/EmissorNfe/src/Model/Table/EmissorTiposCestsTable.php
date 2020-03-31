<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorTiposCests Model
 *
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorTiposCest[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorTiposCestsTable extends Table
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

        $this->setTable('emissor_tipos_cests');
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
            ->scalar('CEST')
            ->maxLength('CEST', 8)
            ->requirePresence('CEST', 'create')
            ->notEmptyString('CEST');

        $validator
            ->scalar('NCM')
            ->maxLength('NCM', 8)
            ->requirePresence('NCM', 'create')
            ->notEmptyString('NCM');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 80)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        return $validator;
    }
}
