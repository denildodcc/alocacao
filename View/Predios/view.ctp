<div class="predios view">
<h2><?php  echo __('Predio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($predio['Predio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($predio['Predio']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($predio['Predio']['endereco']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Predio'), array('action' => 'edit', $predio['Predio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Predio'), array('action' => 'delete', $predio['Predio']['id']), null, __('Are you sure you want to delete # %s?', $predio['Predio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Predios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Predio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas Turmas'), array('controller' => 'salas_turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salas Turma'), array('controller' => 'salas_turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Favoritos'); ?></h3>
	<?php if (!empty($predio['Favorito'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Predio Id'); ?></th>
		<th><?php echo __('Instituto Id'); ?></th>
		<th><?php echo __('Ordem'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($predio['Favorito'] as $favorito): ?>
		<tr>
			<td><?php echo $favorito['predio_id']; ?></td>
			<td><?php echo $favorito['instituto_id']; ?></td>
			<td><?php echo $favorito['ordem']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'favoritos', 'action' => 'view', $favorito['predio_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'favoritos', 'action' => 'edit', $favorito['predio_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'favoritos', 'action' => 'delete', $favorito['predio_id']), null, __('Are you sure you want to delete # %s?', $favorito['predio_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Salas'); ?></h3>
	<?php if (!empty($predio['Sala'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Predio Id'); ?></th>
		<th><?php echo __('Capacidade'); ?></th>
		<th><?php echo __('Andar'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($predio['Sala'] as $sala): ?>
		<tr>
			<td><?php echo $sala['predio_id']; ?></td>
			<td><?php echo $sala['capacidade']; ?></td>
			<td><?php echo $sala['andar']; ?></td>
			<td><?php echo $sala['numero']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'salas', 'action' => 'view', $sala['predio_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'salas', 'action' => 'edit', $sala['predio_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'salas', 'action' => 'delete', $sala['predio_id']), null, __('Are you sure you want to delete # %s?', $sala['predio_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Salas Turmas'); ?></h3>
	<?php if (!empty($predio['SalasTurma'])): ?>
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
		foreach ($predio['SalasTurma'] as $salasTurma): ?>
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
