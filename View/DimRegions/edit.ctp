<div class="dimRegions form">
<?php echo $this->Form->create('DimRegion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dim Region'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DimRegion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DimRegion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Regions'), array('action' => 'index')); ?></li>
	</ul>
</div>
