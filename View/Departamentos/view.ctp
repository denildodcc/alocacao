<div class="departamentos view">
<h2><?php  echo __('Departamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instituto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($departamento['Instituto']['id'], array('controller' => 'institutos', 'action' => 'view', $departamento['Instituto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departamento'), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Departamento'), array('action' => 'delete', $departamento['Departamento']['id']), null, __('Are you sure you want to delete # %s?', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('controller' => 'institutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos'); ?></h3>
	<?php if (!empty($departamento['Curso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departamento['Curso'] as $curso): ?>
		<tr>
			<td><?php echo $curso['id']; ?></td>
			<td><?php echo $curso['departamento_id']; ?></td>
			<td><?php echo $curso['nome']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, __('Are you sure you want to delete # %s?', $curso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
