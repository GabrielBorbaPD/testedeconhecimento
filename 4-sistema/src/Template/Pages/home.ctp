<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="aviso-home">
        <i class="fa fa-exclamation-circle fa-5x" aria-hidden="true"></i>
        <p>Olá! Utilize esta barra de opções para gerenciar suas tarfas!</p>
    </div>
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Listar Tarefas'), ['controller' => 'Tarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tarefa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Tipos de Status'), ['controller' => 'StatusTarefas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tipo de Status'), ['controller' => 'StatusTarefas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chamada-home">
    <h1>GESTAR</h1>
    <h3>Sistema de Gerenciamento de Tarefas</h3>
</div>