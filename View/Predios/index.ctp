<div class="predios index">
	<h2><?php echo __('Predios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($predios as $predio): ?>
	<tr>
		<td><?php echo h($predio['Predio']['id']); ?>&nbsp;</td>
		<td><?php echo h($predio['Predio']['nome']); ?>&nbsp;</td>
		<td><?php echo h($predio['Predio']['endereco']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $predio['Predio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $predio['Predio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $predio['Predio']['id']), null, __('Are you sure you want to delete # %s?', $predio['Predio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Predio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas Turmas'), array('controller' => 'salas_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
