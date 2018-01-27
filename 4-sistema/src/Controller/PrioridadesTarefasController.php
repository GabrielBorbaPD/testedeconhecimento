<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PrioridadesTarefas Controller
 *
 * @property \App\Model\Table\PrioridadesTarefasTable $PrioridadesTarefas
 *
 * @method \App\Model\Entity\PrioridadesTarefa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrioridadesTarefasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $prioridadesTarefas = $this->paginate($this->PrioridadesTarefas);

        $this->set(compact('prioridadesTarefas'));
    }

    /**
     * View method
     *
     * @param string|null $id Prioridades Tarefa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prioridadesTarefa = $this->PrioridadesTarefas->get($id, [
            'contain' => ['Tarefas']
        ]);

        $this->set('prioridadesTarefa', $prioridadesTarefa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prioridadesTarefa = $this->PrioridadesTarefas->newEntity();
        if ($this->request->is('post')) {
            $prioridadesTarefa = $this->PrioridadesTarefas->patchEntity($prioridadesTarefa, $this->request->getData());
            if ($this->PrioridadesTarefas->save($prioridadesTarefa)) {
                $this->Flash->success(__('Prioridade adicionada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A prioridade não pôde ser adicionada. Por favor, tente novamente.'));
        }
        $this->set(compact('prioridadesTarefa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prioridades Tarefa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prioridadesTarefa = $this->PrioridadesTarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prioridadesTarefa = $this->PrioridadesTarefas->patchEntity($prioridadesTarefa, $this->request->getData());
            if ($this->PrioridadesTarefas->save($prioridadesTarefa)) {
                $this->Flash->success(__('Prioridade editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A prioridade não pôde ser editada. Por favor, tente novamente.'));
        }
        $this->set(compact('prioridadesTarefa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prioridades Tarefa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prioridadesTarefa = $this->PrioridadesTarefas->get($id);
        if ($this->PrioridadesTarefas->delete($prioridadesTarefa)) {
            $this->Flash->success(__('Prioridade deletada com sucesso!'));
        } else {
            $this->Flash->error(__('A prioridade não pôde ser deletada. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
