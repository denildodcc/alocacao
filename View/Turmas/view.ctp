<div class="turmas view">
<h2><?php  echo __('Turma'); ?></h2>
	<dl>
		<dt><?php echo __('Professor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($turma['Professor']['nome'], array('controller' => 'professors', 'action' => 'view', $turma['Professor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina Id'); ?></dt>
		<dd>
			<?php echo h($turma['Turma']['disciplina_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cod Turmas'); ?></dt>
		<dd>
			<?php echo h($turma['Turma']['cod_turmas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deficiente'); ?></dt>
		<dd>
			<?php echo h($turma['Turma']['deficiente']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Turma'), array('action' => 'edit', $turma['Turma']['disciplina_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Turma'), array('action' => 'delete', $turma['Turma']['disciplina_id']), null, __('Are you sure you want to delete # %s?', $turma['Turma']['disciplina_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Professors'), array('controller' => 'professors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Professor'), array('controller' => 'professors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Salas Relacionadas'); ?></h3>
	<?php if (!empty($turma['Sala'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Predio Id'); ?></th>
		<th><?php echo __('Capacidade'); ?></th>
		<th><?php echo __('Andar'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($turma['Sala'] as $sala): ?>
		<tr>
			<td><?php echo $sala['predio_id']; ?></td>
			<td><?php echo $sala['capacidade']; ?></td>
			<td><?php echo $sala['andar']; ?></td>
			<td><?php echo $sala['numero']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'salas', 'action' => 'view', $sala['predio_id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'salas', 'action' => 'edit', $sala['predio_id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'salas', 'action' => 'delete', $sala['predio_id']), null, __('Are you sure you want to delete # %s?', $sala['predio_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Horarios Relacionados'); ?></h3>
	<?php if (!empty($turma['Horario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hora Id'); ?></th>
		<th><?php echo __('Dia Id'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($turma['Horario'] as $horario): ?>
		<tr>
			<td><?php echo $horario['id']; ?></td>
			<td><?php echo $horario['hora_id']; ?></td>
			<td><?php echo $horario['dia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'horarios', 'action' => 'view', $horario['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'horarios', 'action' => 'edit', $horario['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'horarios', 'action' => 'delete', $horario['id']), null, __('Are you sure you want to delete # %s?', $horario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
