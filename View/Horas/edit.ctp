<div class="horas form">
<?php echo $this->Form->create('Hora'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hora'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('horas_inicial');
		echo $this->Form->input('horas_final');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hora.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hora.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Horas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
