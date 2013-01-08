<div class="salasTurmas view">
<h2><?php  echo __('Salas Turma'); ?></h2>
	<dl>
		<dt><?php echo __('Sala Id'); ?></dt>
		<dd>
			<?php echo h($salasTurma['SalasTurma']['sala_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Predio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salasTurma['Predio']['id'], array('controller' => 'predios', 'action' => 'view', $salasTurma['Predio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salasTurma['Turma']['disciplina_id'], array('controller' => 'turmas', 'action' => 'view', $salasTurma['Turma']['disciplina_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salasTurma['Disciplina']['id'], array('controller' => 'disciplinas', 'action' => 'view', $salasTurma['Disciplina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($salasTurma['SalasTurma']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salas Turma'), array('action' => 'edit', $salasTurma['SalasTurma']['sala_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salas Turma'), array('action' => 'delete', $salasTurma['SalasTurma']['sala_id']), null, __('Are you sure you want to delete # %s?', $salasTurma['SalasTurma']['sala_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas Turmas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salas Turma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Predios'), array('controller' => 'predios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Predio'), array('controller' => 'predios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
