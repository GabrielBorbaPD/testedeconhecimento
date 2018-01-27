<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tarefas Controller
 *
 * @property \App\Model\Table\TarefasTable $Tarefas
 *
 * @method \App\Model\Entity\Tarefa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TarefasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PrioridadesTarefas', 'StatusTarefas']
        ];
        $tarefas = $this->paginate($this->Tarefas);

        $this->set(compact('tarefas'));
    }

    /**
     * View method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => ['PrioridadesTarefas', 'StatusTarefas']
        ]);

        $this->set('tarefa', $tarefa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tarefa = $this->Tarefas->newEntity();
        if ($this->request->is('post')) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('Tarefa adicionada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A tarefa não pôde ser adicionada. Por favor, tente novamente.'));
        }
        $prioridadesTarefas = $this->Tarefas->PrioridadesTarefas->find('list', ['limit' => 200]);
        $statusTarefas = $this->Tarefas->StatusTarefas->find('list', ['limit' => 200]);
        $this->set(compact('tarefa', 'prioridadesTarefas', 'statusTarefas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tarefa = $this->Tarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                $this->Flash->success(__('Tarefa editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A tarefa não pôde ser editada. Por favor, tente novamente.'));
        }
        $prioridadesTarefas = $this->Tarefas->PrioridadesTarefas->find('list', ['limit' => 200]);
        $statusTarefas = $this->Tarefas->StatusTarefas->find('list', ['limit' => 200]);
        $this->set(compact('tarefa', 'prioridadesTarefas', 'statusTarefas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tarefa = $this->Tarefas->get($id);
        if ($this->Tarefas->delete($tarefa)) {
            $this->Flash->success(__('Tarefa deletada com sucesso!'));
        } else {
            $this->Flash->error(__('A tarefa não pôde ser deletada. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
