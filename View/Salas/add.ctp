<div class="salas form">
<?php echo $this->Form->create('Sala'); ?>
	<fieldset>
		<legend><?php echo __('Adição de Sala'); ?></legend>
	<?php
		echo $this->Form->input('capacidade');
		echo $this->Form->input('andar');
		echo $this->Form->input('numero');
		echo $this->Form->input('Turma');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Salas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
