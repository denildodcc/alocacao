<div class="horarios index">
	<h2><?php echo __('Horarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dia_id'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
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
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $horario['Horario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $horario['Horario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $horario['Horario']['id']), null, __('Tem certeza que deseja excluir o registro de id  # %s?', $horario['Horario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horas'), array('controller' => 'horas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Hora'), array('controller' => 'horas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias'), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Dia'), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
