<div class="turmasHorarios index">
	<h2><?php echo __('Turmas Horarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('horario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('turma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($turmasHorarios as $turmasHorario): ?>
	<tr>
		<td><?php echo h($turmasHorario['TurmasHorario']['horario_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($turmasHorario['Turma']['disciplina_id'], array('controller' => 'turmas', 'action' => 'view', $turmasHorario['Turma']['disciplina_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($turmasHorario['Disciplina']['id'], array('controller' => 'disciplinas', 'action' => 'view', $turmasHorario['Disciplina']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $turmasHorario['TurmasHorario']['horario_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $turmasHorario['TurmasHorario']['horario_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $turmasHorario['TurmasHorario']['horario_id']), null, __('Are you sure you want to delete # %s?', $turmasHorario['TurmasHorario']['horario_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Turmas Horario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
