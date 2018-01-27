<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StatusTarefas Controller
 *
 * @property \App\Model\Table\StatusTarefasTable $StatusTarefas
 *
 * @method \App\Model\Entity\StatusTarefa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusTarefasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $statusTarefas = $this->paginate($this->StatusTarefas);

        $this->set(compact('statusTarefas'));
    }

    /**
     * View method
     *
     * @param string|null $id Status Tarefa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusTarefa = $this->StatusTarefas->get($id, [
            'contain' => ['Tarefas']
        ]);

        $this->set('statusTarefa', $statusTarefa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusTarefa = $this->StatusTarefas->newEntity();
        if ($this->request->is('post')) {
            $statusTarefa = $this->StatusTarefas->patchEntity($statusTarefa, $this->request->getData());
            if ($this->StatusTarefas->save($statusTarefa)) {
                $this->Flash->success(__('Status adicionado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O status não pôde ser adicionado. Por favor, tente novamente.'));
        }
        $this->set(compact('statusTarefa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Status Tarefa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusTarefa = $this->StatusTarefas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusTarefa = $this->StatusTarefas->patchEntity($statusTarefa, $this->request->getData());
            if ($this->StatusTarefas->save($statusTarefa)) {
                $this->Flash->success(__('Status editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O status não pôde ser editado. Por favor, tente novamente.'));
        }
        $this->set(compact('statusTarefa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Status Tarefa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusTarefa = $this->StatusTarefas->get($id);
        if ($this->StatusTarefas->delete($statusTarefa)) {
            $this->Flash->success(__('Status deletado com sucesso!'));
        } else {
            $this->Flash->error(__('O status não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
