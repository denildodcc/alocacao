<div class="turmasHorarios view">
<h2><?php  echo __('Turmas Horario'); ?></h2>
	<dl>
		<dt><?php echo __('Horario Id'); ?></dt>
		<dd>
			<?php echo h($turmasHorario['TurmasHorario']['horario_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($turmasHorario['Turma']['disciplina_id'], array('controller' => 'turmas', 'action' => 'view', $turmasHorario['Turma']['disciplina_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($turmasHorario['Disciplina']['id'], array('controller' => 'disciplinas', 'action' => 'view', $turmasHorario['Disciplina']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Turmas Horario'), array('action' => 'edit', $turmasHorario['TurmasHorario']['horario_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Turmas Horario'), array('action' => 'delete', $turmasHorario['TurmasHorario']['horario_id']), null, __('Are you sure you want to delete # %s?', $turmasHorario['TurmasHorario']['horario_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas Horarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turmas Horario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
