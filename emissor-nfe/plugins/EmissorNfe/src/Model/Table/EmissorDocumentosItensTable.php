<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorDocumentosItens Model
 *
 * @property \EmissorNfe\Model\Table\EmissorDocumentosTable&\Cake\ORM\Association\BelongsTo $EmissorDocumentos
 * @property \EmissorNfe\Model\Table\EmissorProdutosServicosTable&\Cake\ORM\Association\BelongsTo $EmissorProdutosServicos
 *
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumentosIten[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorDocumentosItensTable extends Table
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

        $this->setTable('emissor_documentos_itens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('EmissorDocumentos', [
            'foreignKey' => 'emissor_documentos_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorDocumentos',
        ]);
        $this->belongsTo('EmissorProdutosServicos', [
            'foreignKey' => 'emissor_produtos_servicos_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmissorProdutosServicos',
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
            ->scalar('uCom')
            ->maxLength('uCom', 6)
            ->requirePresence('uCom', 'create')
            ->notEmptyString('uCom');

        $validator
            ->decimal('qCom')
            ->requirePresence('qCom', 'create')
            ->notEmptyString('qCom');

        $validator
            ->decimal('vUnCom')
            ->requirePresence('vUnCom', 'create')
            ->notEmptyString('vUnCom');

        $validator
            ->scalar('uTrib')
            ->maxLength('uTrib', 6)
            ->requirePresence('uTrib', 'create')
            ->notEmptyString('uTrib');

        $validator
            ->decimal('qTrib')
            ->requirePresence('qTrib', 'create')
            ->notEmptyString('qTrib');

        $validator
            ->decimal('vUnTrib')
            ->requirePresence('vUnTrib', 'create')
            ->notEmptyString('vUnTrib');

        $validator
            ->decimal('vProd')
            ->requirePresence('vProd', 'create')
            ->notEmptyString('vProd');

        $validator
            ->decimal('vFrete')
            ->requirePresence('vFrete', 'create')
            ->notEmptyString('vFrete');

        $validator
            ->decimal('vSeg')
            ->requirePresence('vSeg', 'create')
            ->notEmptyString('vSeg');

        $validator
            ->decimal('vDesc')
            ->requirePresence('vDesc', 'create')
            ->notEmptyString('vDesc');

        $validator
            ->decimal('vOutro')
            ->requirePresence('vOutro', 'create')
            ->notEmptyString('vOutro');

        $validator
            ->boolean('indTot')
            ->requirePresence('indTot', 'create')
            ->notEmptyString('indTot');

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
        $rules->add($rules->existsIn(['emissor_produtos_servicos_id'], 'EmissorProdutosServicos'));

        return $rules;
    }
}
