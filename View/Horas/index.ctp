<div class="horas index">
	<h2><?php echo __('Horas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('horas_inicial'); ?></th>
			<th><?php echo $this->Paginator->sort('horas_final'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
	foreach ($horas as $hora): ?>
	<tr>
		<td><?php echo h($hora['Hora']['id']); ?>&nbsp;</td>
		<td><?php echo h($hora['Hora']['horas_inicial']); ?>&nbsp;</td>
		<td><?php echo h($hora['Hora']['horas_final']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $hora['Hora']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $hora['Hora']['id'])); ?>
			<?php echo $this->Form->postLink(__('Exluir'), array('action' => 'delete', $hora['Hora']['id']), null, __('Tem certeza que deseja excluir o registro de id # %s?', $hora['Hora']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Adicionar Hora'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
