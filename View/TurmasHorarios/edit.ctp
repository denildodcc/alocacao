<div class="turmasHorarios form">
<?php echo $this->Form->create('TurmasHorario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Turmas Horario'); ?></legend>
	<?php
		echo $this->Form->input('horario_id');
		echo $this->Form->input('turma_id');
		echo $this->Form->input('disciplina_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TurmasHorario.horario_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TurmasHorario.horario_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Turmas Horarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
