<div class="dimAssistants index">
	<h2><?php echo __('Dim Assistants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Paternal_last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('Maternal_last_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dimAssistants as $dimAssistant): ?>
	<tr>
		<td><?php echo h($dimAssistant['DimAssistant']['Id']); ?>&nbsp;</td>
		<td><?php echo h($dimAssistant['DimAssistant']['Name']); ?>&nbsp;</td>
		<td><?php echo h($dimAssistant['DimAssistant']['Paternal_last_name']); ?>&nbsp;</td>
		<td><?php echo h($dimAssistant['DimAssistant']['Maternal_last_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dimAssistant['DimAssistant']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dimAssistant['DimAssistant']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dimAssistant['DimAssistant']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimAssistant['DimAssistant']['Id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Dim Assistant'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Facts'), array('controller' => 'facts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fact'), array('controller' => 'facts', 'action' => 'add')); ?> </li>
	</ul>
</div>
