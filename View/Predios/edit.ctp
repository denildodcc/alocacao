<div class="predios form">
<?php echo $this->Form->create('Predio'); ?>
	<fieldset>
		<legend><?php echo __('Edição de Prédio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Predio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Predio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Predios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas Turmas'), array('controller' => 'salas_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
