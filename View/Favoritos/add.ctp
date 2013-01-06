<div class="favoritos form">
<?php echo $this->Form->create('Favorito'); ?>
	<fieldset>
		<legend><?php echo __('Add Favorito'); ?></legend>
	<?php
		echo $this->Form->input('instituto_id');
		echo $this->Form->input('ordem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Favoritos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('controller' => 'institutos', 'action' => 'add')); ?> </li>
	</ul>
</div>
