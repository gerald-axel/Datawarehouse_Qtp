<div class="dimPaymentTypes index">
	<h2><?php echo __('Dim Payment Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dimPaymentTypes as $dimPaymentType): ?>
	<tr>
		<td><?php echo h($dimPaymentType['DimPaymentType']['Id']); ?>&nbsp;</td>
		<td><?php echo h($dimPaymentType['DimPaymentType']['Type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dimPaymentType['DimPaymentType']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dimPaymentType['DimPaymentType']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dimPaymentType['DimPaymentType']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimPaymentType['DimPaymentType']['Id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Dim Payment Type'), array('action' => 'add')); ?></li>
	</ul>
</div>
