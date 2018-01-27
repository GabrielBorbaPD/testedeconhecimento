<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusTarefa[]|\Cake\Collection\CollectionInterface $statusTarefas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Adicionar Tipo de Status'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="statusTarefas index large-9 medium-8 columns content">
    <h3><?= __('Tipos de Status') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_status') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statusTarefas as $statusTarefa): ?>
            <tr>
                <td><?= $this->Number->format($statusTarefa->id) ?></td>
                <td><?= h($statusTarefa->nome_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $statusTarefa->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $statusTarefa->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $statusTarefa->id], ['confirm' => __('Você tem certeza que deseja deletar o Tipo de Status: {0}?', $statusTarefa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} resultado(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
