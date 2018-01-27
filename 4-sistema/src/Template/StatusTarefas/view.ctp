<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusTarefa $statusTarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Tipo de Status'), ['action' => 'edit', $statusTarefa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Tipo de Status'), ['action' => 'delete', $statusTarefa->id], ['confirm' => __('Você tem certeza que deseja deletar o Tipo de Status: {0}?', $statusTarefa->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Tipos de Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Tipo de Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statusTarefas view large-9 medium-8 columns content">
    <h3><?= h($statusTarefa->nome_status) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($statusTarefa->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Tarefas Relacionadas') ?></h4>
        <?php if (!empty($statusTarefa->tarefas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($statusTarefa->tarefas as $tarefas): ?>
            <tr>
                <td><?= h($tarefas->id) ?></td>
                <td><?= h($tarefas->titulo) ?></td>
                <td><?= h($tarefas->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Tarefas', 'action' => 'view', $tarefas->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Tarefas', 'action' => 'edit', $tarefas->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Tarefas', 'action' => 'delete', $tarefas->id], ['confirm' => __('Você tem certeza que deseja deletar o Tipo de Status: {0}?', $tarefas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
