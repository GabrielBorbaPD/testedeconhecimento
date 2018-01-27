<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PrioridadesTarefa[]|\Cake\Collection\CollectionInterface $prioridadesTarefas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prioridadesTarefas index large-9 medium-8 columns content">
    <h3><?= __('Prioridades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_prioridade') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prioridadesTarefas as $prioridadesTarefa): ?>
            <tr>
                <td><?= $this->Number->format($prioridadesTarefa->id) ?></td>
                <td><?= h($prioridadesTarefa->nome_prioridade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $prioridadesTarefa->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $prioridadesTarefa->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $prioridadesTarefa->id], ['confirm' => __('Você tem certeza que deseja deletar a Prioridade: {0}?', $prioridadesTarefa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} resultado(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
