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
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Predio'), array('action' => 'edit', $predio['Predio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Predio'), array('action' => 'delete', $predio['Predio']['id']), null, __('Are you sure you want to delete # %s?', $predio['Predio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Predios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Predio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Salas Relacionadas'); ?></h3>
	<?php if (!empty($predio['Sala'])): ?>
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
		foreach ($predio['Sala'] as $sala): ?>
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

