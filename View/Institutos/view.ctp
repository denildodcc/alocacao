<div class="institutos view">
<h2><?php  echo __('Instituto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereço'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['endereço']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instituto'), array('action' => 'edit', $instituto['Instituto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instituto'), array('action' => 'delete', $instituto['Instituto']['id']), null, __('Are you sure you want to delete # %s?', $instituto['Instituto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Departamentos'); ?></h3>
	<?php if (!empty($instituto['Departamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instituto Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instituto['Departamento'] as $departamento): ?>
		<tr>
			<td><?php echo $departamento['id']; ?></td>
			<td><?php echo $departamento['instituto_id']; ?></td>
			<td><?php echo $departamento['nome']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departamentos', 'action' => 'view', $departamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'departamentos', 'action' => 'edit', $departamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'departamentos', 'action' => 'delete', $departamento['id']), null, __('Are you sure you want to delete # %s?', $departamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Favoritos'); ?></h3>
	<?php if (!empty($instituto['Favorito'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Predio Id'); ?></th>
		<th><?php echo __('Instituto Id'); ?></th>
		<th><?php echo __('Ordem'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instituto['Favorito'] as $favorito): ?>
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
