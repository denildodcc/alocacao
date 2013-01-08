<div class="institutos index">
	<h2><?php echo __('Institutos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereço'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
	foreach ($institutos as $instituto): ?>
	<tr>
            <?php //debug($instituto)?>
		<td><?php echo h($instituto['Instituto']['id']); ?>&nbsp;</td>
		<td><?php echo h($instituto['Instituto']['nome']); ?>&nbsp;</td>
		<td><?php echo h($instituto['Instituto']['endereço']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'visualizar', $instituto['Instituto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $instituto['Instituto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $instituto['Instituto']['id']), null, __('Tem certeza que deseja excluir o registro de id # %s?', $instituto['Instituto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} do total de {:count} registro(s), começando em {:start}, terminando em {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Adicionar Instituto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
	</ul>
</div>
