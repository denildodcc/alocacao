<div class="professors form">
<?php echo $this->Form->create('Professor'); ?>
	<fieldset>
		<legend><?php echo __('Edição de  Professor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Professor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Professor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Professors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
