<div class="professors form">
<?php echo $this->Form->create('Professor'); ?>
	<fieldset>
		<legend><?php echo __('Adição de Professor'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label' => 'cpf', 'type' =>'text'));
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Professores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
