<div class="dimRegions index">
	<h2><?php echo __('Dim Regions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Region'); ?></th>
			<th><?php echo $this->Paginator->sort('Country'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dimRegions as $dimRegion): ?>
	<tr>
		<td><?php echo h($dimRegion['DimRegion']['Id']); ?>&nbsp;</td>
		<td><?php echo h($dimRegion['DimRegion']['Region']); ?>&nbsp;</td>
		<td><?php echo h($dimRegion['DimRegion']['Country']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dimRegion['DimRegion']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dimRegion['DimRegion']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dimRegion['DimRegion']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimRegion['DimRegion']['Id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Dim Region'), array('action' => 'add')); ?></li>
	</ul>
</div>
