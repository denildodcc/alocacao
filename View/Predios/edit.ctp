<div class="predios form">
<?php echo $this->Form->create('Predio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Predio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Predio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Predio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Predios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas Turmas'), array('controller' => 'salas_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
