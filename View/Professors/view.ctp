<div class="professors view">
<h2><?php  echo __('Professor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($professor['Professor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($professor['Professor']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Professor'), array('action' => 'edit', $professor['Professor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Professor'), array('action' => 'delete', $professor['Professor']['id']), null, __('Are you sure you want to delete # %s?', $professor['Professor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Turmas'); ?></h3>
	<?php if (!empty($professor['Turma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Professor Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Cod Turmas'); ?></th>
		<th><?php echo __('Deficiente'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($professor['Turma'] as $turma): ?>
		<tr>
			<td><?php echo $turma['professor_id']; ?></td>
			<td><?php echo $turma['disciplina_id']; ?></td>
			<td><?php echo $turma['cod_turmas']; ?></td>
			<td><?php echo $turma['deficiente']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'turmas', 'action' => 'view', $turma['disciplina_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'turmas', 'action' => 'edit', $turma['disciplina_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'turmas', 'action' => 'delete', $turma['disciplina_id']), null, __('Are you sure you want to delete # %s?', $turma['disciplina_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
