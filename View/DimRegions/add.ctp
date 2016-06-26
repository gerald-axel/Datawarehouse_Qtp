<div class="dimRegions form">
<?php echo $this->Form->create('DimRegion'); ?>
	<fieldset>
		<legend><?php echo __('Add Dim Region'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('Region');
		echo $this->Form->input('Country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dim Regions'), array('action' => 'index')); ?></li>
	</ul>
</div>
