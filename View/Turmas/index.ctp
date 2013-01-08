<div class="turmas index">
	<h2><?php echo __('Turmas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('professor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cod_turmas'); ?></th>
			<th><?php echo $this->Paginator->sort('deficiente'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
	foreach ($turmas as $turma): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($turma['Professor']['nome'], array('controller' => 'professors', 'action' => 'view', $turma['Professor']['id'])); ?>
		</td>
		<td><?php echo h($turma['Turma']['disciplina_id']); ?>&nbsp;</td>
		<td><?php echo h($turma['Turma']['cod_turmas']); ?>&nbsp;</td>
		<td><?php echo h($turma['Turma']['deficiente']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $turma['Turma']['disciplina_id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $turma['Turma']['disciplina_id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $turma['Turma']['disciplina_id'],$turma['Turma']['cod_turmas']), null, __('Tem certeza que deseja excluir o registro de id # # %s?', $turma['Turma']['disciplina_id'])); ?>
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
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Professors'), array('controller' => 'professors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Professor'), array('controller' => 'professors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
