<div class="horas form">
<?php echo $this->Form->create('Hora'); ?>
	<fieldset>
		<legend><?php echo __('Edição de  Hora'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('horas_inicial');
		echo $this->Form->input('horas_final');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Hora.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hora.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
