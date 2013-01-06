<div class="favoritos view">
<h2><?php  echo __('Favorito'); ?></h2>
	<dl>
		<dt><?php echo __('Predio Id'); ?></dt>
		<dd>
			<?php echo h($favorito['Favorito']['predio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instituto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favorito['Instituto']['id'], array('controller' => 'institutos', 'action' => 'view', $favorito['Instituto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ordem'); ?></dt>
		<dd>
			<?php echo h($favorito['Favorito']['ordem']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Favorito'), array('action' => 'edit', $favorito['Favorito']['predio_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Favorito'), array('action' => 'delete', $favorito['Favorito']['predio_id']), null, __('Are you sure you want to delete # %s?', $favorito['Favorito']['predio_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutos'), array('controller' => 'institutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituto'), array('controller' => 'institutos', 'action' => 'add')); ?> </li>
	</ul>
</div>
