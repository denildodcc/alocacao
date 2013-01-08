<div class="salas view">
<h2><?php  echo __('Sala'); ?></h2>
	<dl>
		<dt><?php echo __('Predio Id'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['predio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacidade'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['capacidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Andar'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['andar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['numero']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sala'), array('action' => 'edit', $sala['Sala']['predio_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sala'), array('action' => 'delete', $sala['Sala']['predio_id']), null, __('Are you sure you want to delete # %s?', $sala['Sala']['predio_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Turmas'); ?></h3>
	<?php if (!empty($sala['Turma'])): ?>
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
		foreach ($sala['Turma'] as $turma): ?>
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
