<div class="turmas index">
	<h2><?php echo __('Turmas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('professor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cod_turmas'); ?></th>
			<th><?php echo $this->Paginator->sort('deficiente'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($turmas as $turma): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($turma['Professor']['id'], array('controller' => 'professors', 'action' => 'view', $turma['Professor']['id'])); ?>
		</td>
		<td><?php echo h($turma['Turma']['disciplina_id']); ?>&nbsp;</td>
		<td><?php echo h($turma['Turma']['cod_turmas']); ?>&nbsp;</td>
		<td><?php echo h($turma['Turma']['deficiente']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $turma['Turma']['disciplina_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $turma['Turma']['disciplina_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $turma['Turma']['disciplina_id']), null, __('Are you sure you want to delete # %s?', $turma['Turma']['disciplina_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Turma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Professors'), array('controller' => 'professors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professor'), array('controller' => 'professors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
