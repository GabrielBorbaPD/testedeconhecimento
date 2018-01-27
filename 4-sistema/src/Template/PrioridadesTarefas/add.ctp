<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PrioridadesTarefa $prioridadesTarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Listar Prioridades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prioridadesTarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($prioridadesTarefa) ?>
    <fieldset>
        <legend><?= __('Adicionar Prioridade') ?></legend>
        <?php
            echo $this->Form->control('nome_prioridade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
