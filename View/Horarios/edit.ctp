<div class="horarios form">
<?php echo $this->Form->create('Horario'); ?>
	<fieldset>
		<legend><?php echo __('Edição de Horario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hora_id');
		echo $this->Form->input('dia_id');
		echo $this->Form->input('Turma');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $this->Form->value('Horario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Horario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horas'), array('controller' => 'horas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Hora'), array('controller' => 'horas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias'), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Dia'), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
