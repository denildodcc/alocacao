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
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Professor'), array('action' => 'edit', $professor['Professor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Professor'), array('action' => 'delete', $professor['Professor']['id']), null, __('Are you sure you want to delete # %s?', $professor['Professor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Professors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Professor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Turmas'), array('controller' => 'turmas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Turma'), array('controller' => 'turmas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Turmas Relacionadas'); ?></h3>
	<?php if (!empty($professor['Turma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Professor Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Cod Turmas'); ?></th>
		<th><?php echo __('Deficiente'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
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
