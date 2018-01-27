<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tarefas Model
 *
 * @property \App\Model\Table\PrioridadesTarefasTable|\Cake\ORM\Association\BelongsTo $PrioridadesTarefas
 * @property \App\Model\Table\StatusTarefasTable|\Cake\ORM\Association\BelongsTo $StatusTarefas
 *
 * @method \App\Model\Entity\Tarefa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tarefa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tarefa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tarefa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tarefa findOrCreate($search, callable $callback = null, $options = [])
 */
class TarefasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tarefas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('PrioridadesTarefas', [
            'foreignKey' => 'prioridades_tarefa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('StatusTarefas', [
            'foreignKey' => 'status_tarefa_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 200)
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 400)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['prioridades_tarefa_id'], 'PrioridadesTarefas'));
        $rules->add($rules->existsIn(['status_tarefa_id'], 'StatusTarefas'));

        return $rules;
    }
}
