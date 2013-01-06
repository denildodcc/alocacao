<div class="turmas form">
<?php echo $this->Form->create('Turma'); ?>
	<fieldset>
		<legend><?php echo __('Add Turma'); ?></legend>
	<?php
		echo $this->Form->input('professor_id',  array('label' => '<strong>Professores:</strong>', 'options'=>$professors,'empty' => 'Selecione a Instituição Contratada...'));
		echo $this->Form->input('cod_turmas');
		echo $this->Form->input('deficiente');
		echo $this->Form->input('Sala');
		echo $this->Form->input('Horario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Turmas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Professors'), array('controller' => 'professors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professor'), array('controller' => 'professors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
