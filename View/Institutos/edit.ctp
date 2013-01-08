<div class="institutos form">
<?php echo $this->Form->create('Instituto'); ?>
	<fieldset>
		<legend><?php echo __('Edição de Instituto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('endere�o');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Instituto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Instituto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Institutos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
	</ul>
</div>
