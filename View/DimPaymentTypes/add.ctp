<div class="dimPaymentTypes form">
<?php echo $this->Form->create('DimPaymentType'); ?>
	<fieldset>
		<legend><?php echo __('Add Dim Payment Type'); ?></legend>
	<?php
		echo $this->Form->input('Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dim Payment Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
