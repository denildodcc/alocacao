<div class="salas form">
<?php echo $this->Form->create('Sala'); ?>
	<fieldset>
		<legend><?php echo __('Add Sala'); ?></legend>
	<?php
		echo $this->Form->input('capacidade');
		echo $this->Form->input('andar');
		echo $this->Form->input('numero');
		echo $this->Form->input('Turma');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Salas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
