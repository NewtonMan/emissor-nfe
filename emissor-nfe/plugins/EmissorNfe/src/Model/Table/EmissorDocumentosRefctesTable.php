<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorDocumentosRefctes Model
 *
 * @property \EmissorNfe\Model\Table\EmissorDocumentosTable&\Cake\ORM\Association\BelongsTo $EmissorDocumentos
 *
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosRefcte[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorDocumentosRefctesTable extends Table
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

        $this->setTable('emissor_documentos_refctes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('EmissorDocumentos', [
            'foreignKey' => 'emissor_documentos_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorDocumentos',
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
            ->scalar('chave')
            ->maxLength('chave', 44)
            ->requirePresence('chave', 'create')
            ->notEmptyString('chave');

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
        $rules->add($rules->existsIn(['emissor_documentos_id'], 'EmissorDocumentos'));

        return $rules;
    }
}
