<div class="disciplinas view">
<h2><?php  echo __('Disciplina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplina['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $disciplina['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disciplina'), array('action' => 'edit', $disciplina['Disciplina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disciplina'), array('action' => 'delete', $disciplina['Disciplina']['id']), null, __('Are you sure you want to delete # %s?', $disciplina['Disciplina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas Turmas'), array('controller' => 'salas_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas Horarios'), array('controller' => 'turmas_horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turmas Horario'), array('controller' => 'turmas_horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Salas Turmas'); ?></h3>
	<?php if (!empty($disciplina['SalasTurma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Sala Id'); ?></th>
		<th><?php echo __('Predio Id'); ?></th>
		<th><?php echo __('Turma Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($disciplina['SalasTurma'] as $salasTurma): ?>
		<tr>
			<td><?php echo $salasTurma['sala_id']; ?></td>
			<td><?php echo $salasTurma['predio_id']; ?></td>
			<td><?php echo $salasTurma['turma_id']; ?></td>
			<td><?php echo $salasTurma['disciplina_id']; ?></td>
			<td><?php echo $salasTurma['nome']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'salas_turmas', 'action' => 'view', $salasTurma['sala_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'salas_turmas', 'action' => 'edit', $salasTurma['sala_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'salas_turmas', 'action' => 'delete', $salasTurma['sala_id']), null, __('Are you sure you want to delete # %s?', $salasTurma['sala_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Turmas'); ?></h3>
	<?php if (!empty($disciplina['Turma'])): ?>
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
		foreach ($disciplina['Turma'] as $turma): ?>
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
<div class="related">
	<h3><?php echo __('Related Turmas Horarios'); ?></h3>
	<?php if (!empty($disciplina['TurmasHorario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Horario Id'); ?></th>
		<th><?php echo __('Turma Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($disciplina['TurmasHorario'] as $turmasHorario): ?>
		<tr>
			<td><?php echo $turmasHorario['horario_id']; ?></td>
			<td><?php echo $turmasHorario['turma_id']; ?></td>
			<td><?php echo $turmasHorario['disciplina_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'turmas_horarios', 'action' => 'view', $turmasHorario['horario_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'turmas_horarios', 'action' => 'edit', $turmasHorario['horario_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'turmas_horarios', 'action' => 'delete', $turmasHorario['horario_id']), null, __('Are you sure you want to delete # %s?', $turmasHorario['horario_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Turmas Horario'), array('controller' => 'turmas_horarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
