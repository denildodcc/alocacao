<div class="horarios view">
<h2><?php  echo __('Horario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Hora']['horas_inicial']. '-' . $horario['Hora']['horas_final'], array('controller' => 'horas', 'action' => 'view', $horario['Hora']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Dia']['dias_da_semana'], array('controller' => 'dias', 'action' => 'view', $horario['Dia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Horario'), array('action' => 'edit', $horario['Horario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Horario'), array('action' => 'delete', $horario['Horario']['id']), null, __('Are you sure you want to delete # %s?', $horario['Horario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Horas'), array('controller' => 'horas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Hora'), array('controller' => 'horas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Dias'), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Dia'), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Turmas Relacionadas'); ?></h3>
	<?php if (!empty($horario['Turma'])): ?>
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
		foreach ($horario['Turma'] as $turma): ?>
		<tr>
			<td><?php echo $turma['professor_id']; ?></td>
			<td><?php echo $turma['disciplina_id']; ?></td>
			<td><?php echo $turma['cod_turmas']; ?></td>
			<td><?php echo $turma['deficiente']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'turmas', 'action' => 'view', $turma['disciplina_id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'turmas', 'action' => 'edit', $turma['disciplina_id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'turmas', 'action' => 'delete', $turma['disciplina_id']), null, __('Are you sure you want to delete # %s?', $turma['disciplina_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
