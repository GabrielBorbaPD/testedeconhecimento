<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusTarefa $statusTarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusTarefa->id],
                ['confirm' => __('Você tem certeza que deseja deletar o Tipo de Status: {0}?', $statusTarefa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Tipos de Status'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['controller' => 'Tarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="statusTarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($statusTarefa) ?>
    <fieldset>
        <legend><?= __('Editar Tipo de Status') ?></legend>
        <?php
            echo $this->Form->control('nome_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
