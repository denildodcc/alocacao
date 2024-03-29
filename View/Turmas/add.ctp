<div class="turmas form">
<?php echo $this->Form->create('Turma'); ?>
	<fieldset>
		<legend><?php echo __('Adição de Turmas'); ?></legend>
	<?php
		echo $this->Form->input('professor_id',array('options' => $professors));
		echo $this->Form->input('cod_turmas');
		echo $this->Form->input('disciplina_id',array('options' => $disciplinas));
		echo $this->Form->input('curso_id',array('options' => $cursos));
		echo $this->Form->input('deficiente');
		echo $this->Form->input('Sala');
		echo $this->Form->input('Horario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Turmas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Professors'), array('controller' => 'professors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Professor'), array('controller' => 'professors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
