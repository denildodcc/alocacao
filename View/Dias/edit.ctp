<div class="dias form">
<?php echo $this->Form->create('Dia'); ?>
	<fieldset>
		<legend><?php echo __('Edição de  Dia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dias_da_semana');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Dia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Dia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Dias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
