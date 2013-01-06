<div class="institutos form">
<?php echo $this->Form->create('Instituto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instituto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereço');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instituto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Instituto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
	</ul>
</div>
