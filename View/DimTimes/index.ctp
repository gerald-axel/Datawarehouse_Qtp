<div class="dimTimes index">
	<h2><?php echo __('Dim Times'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('StartDate'); ?></th>
			<th><?php echo $this->Paginator->sort('StartYear'); ?></th>
			<th><?php echo $this->Paginator->sort('StartQuarter'); ?></th>
			<th><?php echo $this->Paginator->sort('StartMonth'); ?></th>
			<th><?php echo $this->Paginator->sort('StartWeek'); ?></th>
			<th><?php echo $this->Paginator->sort('EndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('EndYear'); ?></th>
			<th><?php echo $this->Paginator->sort('EndQuarter'); ?></th>
			<th><?php echo $this->Paginator->sort('EndMonth'); ?></th>
			<th><?php echo $this->Paginator->sort('EndWeek'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dimTimes as $dimTime): ?>
	<tr>
		<td><?php echo h($dimTime['DimTime']['Id']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['StartDate']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['StartYear']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['StartQuarter']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['StartMonth']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['StartWeek']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['EndDate']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['EndYear']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['EndQuarter']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['EndMonth']); ?>&nbsp;</td>
		<td><?php echo h($dimTime['DimTime']['EndWeek']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dimTime['DimTime']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dimTime['DimTime']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dimTime['DimTime']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimTime['DimTime']['Id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Dim Time'), array('action' => 'add')); ?></li>
	</ul>
</div>
