<div class="cursos view">
<h2><?php  echo __('Curso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($curso['Departamento']['nome'], array('controller' => 'departamentos', 'action' => 'view', $curso['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Curso'), array('action' => 'delete', $curso['Curso']['id']), null, __('Tem certeza que deseja excluir o registro de id  # %s?', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Disciplinas Relacionadas'); ?></h3>
	<?php if (!empty($curso['Disciplina'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Disciplina'] as $disciplina): ?>
		<tr>
			<td><?php echo $disciplina['id']; ?></td>
			<td><?php echo $disciplina['curso_id']; ?></td>
			<td><?php echo $disciplina['nome']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'disciplinas', 'action' => 'view', $disciplina['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'disciplinas', 'action' => 'edit', $disciplina['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'disciplinas', 'action' => 'delete', $disciplina['id']), null, __('Are you sure you want to delete # %s?', $disciplina['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
