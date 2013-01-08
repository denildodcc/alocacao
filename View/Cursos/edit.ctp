<div class="cursos form">
<?php echo $this->Form->create('Curso'); ?>
	<fieldset>
		<legend><?php echo __('Edição de Curso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Curso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Curso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
