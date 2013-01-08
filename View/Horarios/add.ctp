<div class="horarios form">
<?php echo $this->Form->create('Horario'); ?>
	<fieldset>
		<legend><?php echo __('Adição de Horario'); ?></legend>
	<?php
		echo $this->Form->input('hora_id');
		echo $this->Form->input('dia_id');
		echo $this->Form->input('Turma');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Horarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horas'), array('controller' => 'horas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Hora'), array('controller' => 'horas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias'), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Dia'), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
