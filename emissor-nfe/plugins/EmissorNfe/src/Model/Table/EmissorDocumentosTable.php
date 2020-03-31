<?php
declare(strict_types=1);

namespace EmissorNfe\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmissorDocumentos Model
 *
 * @property \EmissorNfe\Model\Table\EmitentesTable&\Cake\ORM\Association\BelongsTo $Emitentes
 * @property \EmissorNfe\Model\Table\EmitenteEnderecosTable&\Cake\ORM\Association\BelongsTo $EmitenteEnderecos
 * @property \EmissorNfe\Model\Table\DestinatariosTable&\Cake\ORM\Association\BelongsTo $Destinatarios
 * @property \EmissorNfe\Model\Table\DestinatarioEnderecosTable&\Cake\ORM\Association\BelongsTo $DestinatarioEnderecos
 * @property \EmissorNfe\Model\Table\RetiradaEnderecosTable&\Cake\ORM\Association\BelongsTo $RetiradaEnderecos
 * @property \EmissorNfe\Model\Table\EntregaEnderecosTable&\Cake\ORM\Association\BelongsTo $EntregaEnderecos
 * @property \EmissorNfe\Model\Table\TransportadorasTable&\Cake\ORM\Association\BelongsTo $Transportadoras
 *
 * @method \EmissorNfe\Model\Entity\EmissorDocumento newEmptyEntity()
 * @method \EmissorNfe\Model\Entity\EmissorDocumento newEntity(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento[] newEntities(array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento get($primaryKey, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \EmissorNfe\Model\Entity\EmissorDocumento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmissorDocumentosTable extends Table
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

        $this->setTable('emissor_documentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Emitentes', [
            'foreignKey' => 'emitente_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.Emitentes',
        ]);
        $this->belongsTo('EmitenteEnderecos', [
            'foreignKey' => 'emitente_endereco_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.EmitenteEnderecos',
        ]);
        $this->belongsTo('Destinatarios', [
            'foreignKey' => 'destinatario_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.Destinatarios',
        ]);
        $this->belongsTo('DestinatarioEnderecos', [
            'foreignKey' => 'destinatario_endereco_id',
            'joinType' => 'INNER',
            'className' => 'EmissorNfe.DestinatarioEnderecos',
        ]);
        $this->belongsTo('RetiradaEnderecos', [
            'foreignKey' => 'retirada_endereco_id',
            'className' => 'EmissorNfe.RetiradaEnderecos',
        ]);
        $this->belongsTo('EntregaEnderecos', [
            'foreignKey' => 'entrega_endereco_id',
            'className' => 'EmissorNfe.EntregaEnderecos',
        ]);
        $this->belongsTo('Transportadoras', [
            'foreignKey' => 'transportadora_id',
            'className' => 'EmissorNfe.Transportadoras',
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
            ->integer('mod')
            ->requirePresence('mod', 'create')
            ->notEmptyString('mod');

        $validator
            ->integer('serie')
            ->requirePresence('serie', 'create')
            ->notEmptyString('serie');

        $validator
            ->requirePresence('nNF', 'create')
            ->notEmptyString('nNF');

        $validator
            ->requirePresence('cNF', 'create')
            ->notEmptyString('cNF');

        $validator
            ->scalar('UF')
            ->maxLength('UF', 2)
            ->requirePresence('UF', 'create')
            ->notEmptyString('UF');

        $validator
            ->dateTime('dhEmi')
            ->requirePresence('dhEmi', 'create')
            ->notEmptyDateTime('dhEmi');

        $validator
            ->dateTime('dhSaiEnt')
            ->requirePresence('dhSaiEnt', 'create')
            ->notEmptyDateTime('dhSaiEnt');

        $validator
            ->scalar('natOp')
            ->maxLength('natOp', 60)
            ->requirePresence('natOp', 'create')
            ->notEmptyString('natOp');

        $validator
            ->integer('tpNF')
            ->requirePresence('tpNF', 'create')
            ->notEmptyString('tpNF');

        $validator
            ->integer('idDest')
            ->requirePresence('idDest', 'create')
            ->notEmptyString('idDest');

        $validator
            ->integer('cMunFG')
            ->requirePresence('cMunFG', 'create')
            ->notEmptyString('cMunFG');

        $validator
            ->integer('tpImp')
            ->requirePresence('tpImp', 'create')
            ->notEmptyString('tpImp');

        $validator
            ->integer('tpEmis')
            ->requirePresence('tpEmis', 'create')
            ->notEmptyString('tpEmis');

        $validator
            ->scalar('chave')
            ->maxLength('chave', 44)
            ->requirePresence('chave', 'create')
            ->notEmptyString('chave');

        $validator
            ->integer('cDV')
            ->requirePresence('cDV', 'create')
            ->notEmptyString('cDV');

        $validator
            ->integer('tpAmb')
            ->requirePresence('tpAmb', 'create')
            ->notEmptyString('tpAmb');

        $validator
            ->integer('finNFe')
            ->requirePresence('finNFe', 'create')
            ->notEmptyString('finNFe');

        $validator
            ->integer('indFinal')
            ->requirePresence('indFinal', 'create')
            ->notEmptyString('indFinal');

        $validator
            ->integer('indPres')
            ->requirePresence('indPres', 'create')
            ->notEmptyString('indPres');

        $validator
            ->integer('procEmi')
            ->requirePresence('procEmi', 'create')
            ->notEmptyString('procEmi');

        $validator
            ->scalar('infCpl')
            ->maxLength('infCpl', 100)
            ->requirePresence('infCpl', 'create')
            ->notEmptyString('infCpl');

        $validator
            ->integer('modFrete')
            ->notEmptyString('modFrete');

        $validator
            ->allowEmptyString('xml');

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
        $rules->add($rules->existsIn(['emitente_id'], 'Emitentes'));
        $rules->add($rules->existsIn(['emitente_endereco_id'], 'EmitenteEnderecos'));
        $rules->add($rules->existsIn(['destinatario_id'], 'Destinatarios'));
        $rules->add($rules->existsIn(['destinatario_endereco_id'], 'DestinatarioEnderecos'));
        $rules->add($rules->existsIn(['retirada_endereco_id'], 'RetiradaEnderecos'));
        $rules->add($rules->existsIn(['entrega_endereco_id'], 'EntregaEnderecos'));
        $rules->add($rules->existsIn(['transportadora_id'], 'Transportadoras'));

        return $rules;
    }
}
