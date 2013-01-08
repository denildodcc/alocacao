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
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($instituto['Instituto']['endereco']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Instituto'), array('action' => 'edit', $instituto['Instituto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Excluir Instituto'), array('action' => 'delete', $instituto['Instituto']['id']), null, __('Are you sure you want to delete # %s?', $instituto['Instituto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Institutos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Instituto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __(' Departamentos Relacionados'); ?></h3>
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
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'departamentos', 'action' => 'view', $departamento['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'departamentos', 'action' => 'edit', $departamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'departamentos', 'action' => 'delete', $departamento['id']), null, __('Are you sure you want to delete # %s?', $departamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
