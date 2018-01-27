<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StatusTarefas Model
 *
 * @property \App\Model\Table\TarefasTable|\Cake\ORM\Association\HasMany $Tarefas
 *
 * @method \App\Model\Entity\StatusTarefa get($primaryKey, $options = [])
 * @method \App\Model\Entity\StatusTarefa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StatusTarefa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StatusTarefa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StatusTarefa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StatusTarefa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StatusTarefa findOrCreate($search, callable $callback = null, $options = [])
 */
class StatusTarefasTable extends Table
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

        $this->setTable('status_tarefas');
        $this->setDisplayField('nome_status');
        $this->setPrimaryKey('id');

        $this->hasMany('Tarefas', [
            'foreignKey' => 'status_tarefa_id'
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
            ->scalar('nome_status')
            ->maxLength('nome_status', 100)
            ->requirePresence('nome_status', 'create')
            ->notEmpty('nome_status');

        return $validator;
    }
}
