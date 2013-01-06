<div class="horarios index">
	<h2><?php echo __('Horarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($horarios as $horario): ?>
	<tr>
		<td><?php echo h($horario['Horario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($horario['Hora']['id'], array('controller' => 'horas', 'action' => 'view', $horario['Hora']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($horario['Dia']['id'], array('controller' => 'dias', 'action' => 'view', $horario['Dia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $horario['Horario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $horario['Horario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $horario['Horario']['id']), null, __('Are you sure you want to delete # %s?', $horario['Horario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Horario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Horas'), array('controller' => 'horas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hora'), array('controller' => 'horas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dias'), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dia'), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
