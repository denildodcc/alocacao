<div class="dias view">
<h2><?php  echo __('Dia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dia['Dia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias Da Semana'); ?></dt>
		<dd>
			<?php echo h($dia['Dia']['dias_da_semana']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dia'), array('action' => 'edit', $dia['Dia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dia'), array('action' => 'delete', $dia['Dia']['id']), null, __('Are you sure you want to delete # %s?', $dia['Dia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($dia['Horario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hora Id'); ?></th>
		<th><?php echo __('Dia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dia['Horario'] as $horario): ?>
		<tr>
			<td><?php echo $horario['id']; ?></td>
			<td><?php echo $horario['hora_id']; ?></td>
			<td><?php echo $horario['dia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarios', 'action' => 'view', $horario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarios', 'action' => 'edit', $horario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarios', 'action' => 'delete', $horario['id']), null, __('Are you sure you want to delete # %s?', $horario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
