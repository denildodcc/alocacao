<div class="departamentos form">
<?php echo $this->Form->create('Departamento'); ?>
	<fieldset>
		<legend><?php echo __('Edição de Departamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('instituto_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Departamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Departamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Departamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Instituto'), array('controller' => 'institutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
