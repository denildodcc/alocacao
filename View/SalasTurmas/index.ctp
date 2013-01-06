<div class="salasTurmas index">
	<h2><?php echo __('Salas Turmas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('sala_id'); ?></th>
			<th><?php echo $this->Paginator->sort('predio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('turma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($salasTurmas as $salasTurma): ?>
	<tr>
		<td><?php echo h($salasTurma['SalasTurma']['sala_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salasTurma['Predio']['id'], array('controller' => 'predios', 'action' => 'view', $salasTurma['Predio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salasTurma['Turma']['disciplina_id'], array('controller' => 'turmas', 'action' => 'view', $salasTurma['Turma']['disciplina_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salasTurma['Disciplina']['id'], array('controller' => 'disciplinas', 'action' => 'view', $salasTurma['Disciplina']['id'])); ?>
		</td>
		<td><?php echo h($salasTurma['SalasTurma']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salasTurma['SalasTurma']['sala_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salasTurma['SalasTurma']['sala_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salasTurma['SalasTurma']['sala_id']), null, __('Are you sure you want to delete # %s?', $salasTurma['SalasTurma']['sala_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Salas Turma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Predios'), array('controller' => 'predios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Predio'), array('controller' => 'predios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
