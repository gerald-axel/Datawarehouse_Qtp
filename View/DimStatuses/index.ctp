<div class="dimStatuses index">
	<h2><?php echo __('Dim Statuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Type'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dimStatuses as $dimStatus): ?>
	<tr>
		<td><?php echo h($dimStatus['DimStatus']['Id']); ?>&nbsp;</td>
		<td><?php echo h($dimStatus['DimStatus']['Type']); ?>&nbsp;</td>
		<td><?php echo h($dimStatus['DimStatus']['Description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dimStatus['DimStatus']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dimStatus['DimStatus']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dimStatus['DimStatus']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimStatus['DimStatus']['Id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dim Status'), array('action' => 'add')); ?></li>
	</ul>
</div>
