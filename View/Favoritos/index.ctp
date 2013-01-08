<div class="favoritos index">
	<h2><?php echo __('Favoritos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('predio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('instituto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ordem'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($favoritos as $favorito): ?>
	<tr>
		<td><?php echo h($favorito['Favorito']['predio_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($favorito['Instituto']['id'], array('controller' => 'institutos', 'action' => 'view', $favorito['Instituto']['id'])); ?>
		</td>
		<td><?php echo h($favorito['Favorito']['ordem']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $favorito['Favorito']['predio_id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $favorito['Favorito']['predio_id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $favorito['Favorito']['predio_id']), null, __('Are you sure you want to delete # %s?', $favorito['Favorito']['predio_id'])); ?>
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
