<div class="disciplinas form">
<?php echo $this->Form->create('Disciplina'); ?>
	<fieldset>
		<legend><?php echo __('Adição de Disciplina'); ?></legend>
	<?php
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('id',array('label' => 'codigo', 'type' =>'text'));
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Disciplinas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li>
	</ul>
</div>
