<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Tarefa'), ['action' => 'edit', $tarefa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Tarefa'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Você tem certeza que deseja deletar a Tarefa: {0}?', $tarefa->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Tipos de Status'), ['controller' => 'StatusTarefas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Tipo de Status'), ['controller' => 'StatusTarefas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tarefas view large-9 medium-8 columns content">
    <h3><?= h($tarefa->titulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($tarefa->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridades Tarefa') ?></th>
            <td><?= $tarefa->has('prioridades_tarefa') ? $this->Html->link($tarefa->prioridades_tarefa->nome_prioridade, ['controller' => 'PrioridadesTarefas', 'action' => 'view', $tarefa->prioridades_tarefa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Tarefa') ?></th>
            <td><?= $tarefa->has('status_tarefa') ? $this->Html->link($tarefa->status_tarefa->nome_status, ['controller' => 'StatusTarefas', 'action' => 'view', $tarefa->status_tarefa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tarefa->id) ?></td>
        </tr>
    </table>
</div>
