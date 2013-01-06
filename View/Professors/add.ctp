<div class="professors form">
<?php echo $this->Form->create('Professor'); ?>
	<fieldset>
		<legend><?php echo __('Add Professor'); ?></legend>
	<?php
                
                echo $this->Form->input('id',array('type' => 'text', 'label' => 'CPF'));
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Professors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
