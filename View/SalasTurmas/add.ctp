<div class="salasTurmas form">
<?php echo $this->Form->create('SalasTurma'); ?>
	<fieldset>
		<legend><?php echo __('Add Salas Turma'); ?></legend>
	<?php
		echo $this->Form->input('predio_id');
		echo $this->Form->input('turma_id');
		echo $this->Form->input('disciplina_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Salas Turmas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Predios'), array('controller' => 'predios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Predio'), array('controller' => 'predios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
