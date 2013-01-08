<div class="disciplinas index">
	<h2><?php echo __('Disciplinas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($disciplinas as $disciplina): ?>
	<tr>
		<td><?php echo h($disciplina['Disciplina']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($disciplina['Departamento']['nome'], array('controller' => 'departamento', 'action' => 'view', $disciplina['Departamento']['id'])); ?>
		</td>
		<td><?php echo h($disciplina['Disciplina']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $disciplina['Disciplina']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $disciplina['Disciplina']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $disciplina['Disciplina']['id']), null, __('Tem certeza que deseja excluir o registro de id # %s?', $disciplina['Disciplina']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Adicionar Disciplina'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	
	</ul>
</div>
