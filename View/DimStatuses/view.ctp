<div class="dimStatuses view">
<h2><?php echo __('Dim Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimStatus['DimStatus']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($dimStatus['DimStatus']['Type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($dimStatus['DimStatus']['Description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Status'), array('action' => 'edit', $dimStatus['DimStatus']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Status'), array('action' => 'delete', $dimStatus['DimStatus']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimStatus['DimStatus']['Id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Status'), array('action' => 'add')); ?> </li>
	</ul>
</div>
