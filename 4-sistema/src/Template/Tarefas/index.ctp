<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Tipos de Status'), ['controller' => 'StatusTarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tipo de Status'), ['controller' => 'StatusTarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tarefas index large-9 medium-8 columns content">
    <h3><?= __('Tarefas') ?></h3>

    <!-- Reajusta o array da lista pela ordem de prioridade -->

        <?php 
            $cont=0;
            foreach ($tarefas as $tarefa):
            if (h($tarefa->prioridades_tarefa->nome_prioridade) == "Urgente") {
                $listaOrdenada[$cont] = $tarefa;
                $cont++;
            } 
            endforeach;
            foreach ($tarefas as $tarefa):
            if (h($tarefa->prioridades_tarefa->nome_prioridade) == "Alta") {
                $listaOrdenada[$cont] = $tarefa;
                $cont++;
            } 
            endforeach;
            foreach ($tarefas as $tarefa):
            if (h($tarefa->prioridades_tarefa->nome_prioridade) == "Média") {
                $listaOrdenada[$cont] = $tarefa;
                $cont++;
            } 
            endforeach;
            foreach ($tarefas as $tarefa):
            if (h($tarefa->prioridades_tarefa->nome_prioridade) == "Baixa") {
                $listaOrdenada[$cont] = $tarefa;
                $cont++;
            } 
            endforeach;
        ?>
        
        <!-- Botões para troca de estilo de tabela -->

        <a href="?click=cards"><i class="fa fa-th-large" aria-hidden="true"></i></a>
        <a href="?click=padrao"><i class="fa fa-bars" aria-hidden="true"></i></a>
        
        <?php @$escolha = $_GET['click'];
        if ($escolha == "padrao") { ?>
        
            <!-- Início da tabela -->
            <!-- Cabeçalho da tabela -->

            <table cellpadding="0" cellspacing="0" class="tabela-padrao">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('prioridades_tarefa_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status_tarefa_id') ?></th>
                        <th scope="col" class="actions"><?= __('Ações') ?></th>
                    </tr>
                </thead>

                <!-- Corpo da tabela -->

                <tbody>
                    <?php foreach ($listaOrdenada as $tarefa): ?>
                    <tr>
                        <td><?= $this->Number->format($tarefa->id) ?></td>
                        <td><?= h($tarefa->titulo) ?></td>
                        <td><?= substr(h($tarefa->descricao), 0, 20) ?></td>
                        <td><?= $tarefa->has('prioridades_tarefa') ? $this->Html->link($tarefa->prioridades_tarefa->nome_prioridade, ['controller' => 'PrioridadesTarefas', 'action' => 'view', $tarefa->prioridades_tarefa->id]) : '' ?></td>
                        <td><?= $tarefa->has('status_tarefa') ? $this->Html->link($tarefa->status_tarefa->nome_status, ['controller' => 'StatusTarefas', 'action' => 'view', $tarefa->status_tarefa->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $tarefa->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tarefa->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Você tem certeza que deseja deletar a Tarefa: {0}?', $tarefa->titulo)]) ?>
                        </td>
                    </tr>
                
                <?php endforeach; ?>
                </tbody>
        </table>
     
        <?php } else { ?>

                <!-- Tabela alternativa - Cards -->

                <?php foreach ($listaOrdenada as $tarefa): ?>
                <table class="cards">
                    <tbody>
                        <thead>
                            <td><?= h($tarefa->titulo) ?></td>
                        </thead>
                        <tr>
                            <td><?= substr(h($tarefa->descricao), 0, 20) ?></td>
                        </tr>
                        <tr>
                            <td><?= $tarefa->has('prioridades_tarefa') ? $this->Html->link($tarefa->prioridades_tarefa->nome_prioridade, ['controller' => 'PrioridadesTarefas', 'action' => 'view', $tarefa->prioridades_tarefa->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <td><?= $tarefa->has('status_tarefa') ? $this->Html->link($tarefa->status_tarefa->nome_status, ['controller' => 'StatusTarefas', 'action' => 'view', $tarefa->status_tarefa->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $tarefa->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tarefa->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Você tem certeza que deseja deletar a Tarefa: {0}?', $tarefa->titulo)]) ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>

        <?php } ?>
     
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} resultado(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
