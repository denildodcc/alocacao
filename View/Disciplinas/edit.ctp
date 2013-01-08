<div class="disciplinas form">
<?php echo $this->Form->create('Disciplina'); ?>
	<fieldset>
		<legend><?php echo __('Edição Disciplina'); ?></legend>
	<?php
		echo $this->Form->input('id',array ('type'=> 'text','label'=>'Código'));
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Disciplina.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Disciplina.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Disciplinas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
</div>
