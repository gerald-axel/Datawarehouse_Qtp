<div class="dimPaymentTypes view">
<h2><?php echo __('Dim Payment Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimPaymentType['DimPaymentType']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($dimPaymentType['DimPaymentType']['Type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Payment Type'), array('action' => 'edit', $dimPaymentType['DimPaymentType']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Payment Type'), array('action' => 'delete', $dimPaymentType['DimPaymentType']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimPaymentType['DimPaymentType']['Id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Payment Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Payment Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
