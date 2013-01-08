<div class="predios index">
	<h2><?php echo __('Predios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
	foreach ($predios as $predio): ?>
	<tr>
		<td><?php echo h($predio['Predio']['id']); ?>&nbsp;</td>
		<td><?php echo h($predio['Predio']['nome']); ?>&nbsp;</td>
		<td><?php echo h($predio['Predio']['endereco']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $predio['Predio']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $predio['Predio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $predio['Predio']['id']), null, __('Tem certeza que deseja excluir o registro de id # %s?', $predio['Predio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} do total de {:count} registro(s), começando em {:start}, terminando em {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Adicionar Predio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas Turmas'), array('controller' => 'salas_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
