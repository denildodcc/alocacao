<div class="horas view">
<h2><?php  echo __('Hora'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hora['Hora']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horas Inicial'); ?></dt>
		<dd>
			<?php echo h($hora['Hora']['horas_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horas Final'); ?></dt>
		<dd>
			<?php echo h($hora['Hora']['horas_final']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Hora'), array('action' => 'edit', $hora['Hora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Hora'), array('action' => 'delete', $hora['Hora']['id']), null, __('Are you sure you want to delete # %s?', $hora['Hora']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Horas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Hora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Horarios Relacionados'); ?></h3>
	<?php if (!empty($hora['Horario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hora Id'); ?></th>
		<th><?php echo __('Dia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hora['Horario'] as $horario): ?>
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
