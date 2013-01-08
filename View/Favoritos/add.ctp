<div class="favoritos form">
<?php echo $this->Form->create('Favorito'); ?>
	<fieldset>
		<legend><?php echo __('Adiciona Relação Favorito'); ?></legend>
	<?php
		echo $this->Form->input('instituto_id');
		echo $this->Form->input('ordem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Relações de Favoritos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Instituto'), array('controller' => 'institutos', 'action' => 'add')); ?> </li>
	</ul>
</div>
