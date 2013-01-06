<div class="disciplinas form">
<?php echo $this->Form->create('Disciplina'); ?>
	<fieldset>
		<legend><?php echo __('Add Disciplina'); ?></legend>
	<?php
		echo $this->Form->input('curso_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Disciplinas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas Turmas'), array('controller' => 'salas_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas Horarios'), array('controller' => 'turmas_horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turmas Horario'), array('controller' => 'turmas_horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
