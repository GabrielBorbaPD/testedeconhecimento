<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tarefa->id],
                ['confirm' => __('Você tem certeza que deseja deletar a Tarefa: {0}?', $tarefa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Tipos de Status'), ['controller' => 'StatusTarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tipo de Status'), ['controller' => 'StatusTarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Editar Tarefa') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('prioridades_tarefa_id', ['options' => $prioridadesTarefas]);
            echo $this->Form->control('status_tarefa_id', ['options' => $statusTarefas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
