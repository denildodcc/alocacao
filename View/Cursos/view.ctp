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
			<?php echo $this->Html->link($curso['Departamento']['id'], array('controller' => 'departamentos', 'action' => 'view', $curso['Departamento']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso'), array('action' => 'delete', $curso['Curso']['id']), null, __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Disciplinas'); ?></h3>
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'disciplinas', 'action' => 'view', $disciplina['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disciplinas', 'action' => 'edit', $disciplina['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disciplinas', 'action' => 'delete', $disciplina['id']), null, __('Are you sure you want to delete # %s?', $disciplina['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
