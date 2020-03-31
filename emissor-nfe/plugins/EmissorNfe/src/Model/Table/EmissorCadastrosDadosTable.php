<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorCadastrosDados Model
 *
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorCadastrosDado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmissorCadastrosDadosTable extends Table
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

        $this->setTable('emissor_cadastros_dados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmptyString('CNPJ')
            ->add('CNPJ', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmptyString('CPF')
            ->add('CPF', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('idEstrangeiro')
            ->maxLength('idEstrangeiro', 20)
            ->allowEmptyString('idEstrangeiro')
            ->add('idEstrangeiro', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('xNome')
            ->maxLength('xNome', 60)
            ->requirePresence('xNome', 'create')
            ->notEmptyString('xNome');

        $validator
            ->scalar('fone')
            ->maxLength('fone', 14)
            ->allowEmptyString('fone');

        $validator
            ->integer('indIEDest')
            ->requirePresence('indIEDest', 'create')
            ->notEmptyString('indIEDest');

        $validator
            ->scalar('IE')
            ->maxLength('IE', 14)
            ->requirePresence('IE', 'create')
            ->notEmptyString('IE');

        $validator
            ->scalar('ISUF')
            ->maxLength('ISUF', 9)
            ->allowEmptyString('ISUF');

        $validator
            ->scalar('IM')
            ->maxLength('IM', 15)
            ->allowEmptyString('IM');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 100)
            ->allowEmptyString('logo');

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
        $rules->add($rules->isUnique(['CNPJ']));
        $rules->add($rules->isUnique(['CPF']));
        $rules->add($rules->isUnique(['idEstrangeiro']));

        return $rules;
    }
}
