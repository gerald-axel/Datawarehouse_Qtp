<div class="dimPaymentTypes form">
<?php echo $this->Form->create('DimPaymentType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dim Payment Type'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DimPaymentType.Id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DimPaymentType.Id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Payment Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
