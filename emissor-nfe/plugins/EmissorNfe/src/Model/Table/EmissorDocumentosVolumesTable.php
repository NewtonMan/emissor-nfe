<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorDocumentosVolumes Model
 *
 * @property \EmissorNfe\Model\Table\EmissorDocumentosTable&\Cake\ORM\Association\BelongsTo $EmissorDocumentos
 *
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosVolume[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorDocumentosVolumesTable extends Table
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

        $this->setTable('emissor_documentos_volumes');
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
            ->integer('qVol')
            ->requirePresence('qVol', 'create')
            ->notEmptyString('qVol');

        $validator
            ->scalar('esp')
            ->maxLength('esp', 100)
            ->requirePresence('esp', 'create')
            ->notEmptyString('esp');

        $validator
            ->scalar('marca')
            ->maxLength('marca', 100)
            ->requirePresence('marca', 'create')
            ->notEmptyString('marca');

        $validator
            ->scalar('nVol')
            ->maxLength('nVol', 100)
            ->requirePresence('nVol', 'create')
            ->notEmptyString('nVol');

        $validator
            ->numeric('pesoL')
            ->requirePresence('pesoL', 'create')
            ->notEmptyString('pesoL');

        $validator
            ->numeric('pesoB')
            ->requirePresence('pesoB', 'create')
            ->notEmptyString('pesoB');

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
