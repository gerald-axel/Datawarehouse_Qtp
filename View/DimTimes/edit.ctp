<div class="dimTimes form">
<?php echo $this->Form->create('DimTime'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dim Time'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('StartYear');
		echo $this->Form->input('StartQuarter');
		echo $this->Form->input('StartMonth');
		echo $this->Form->input('StartWeek');
		echo $this->Form->input('EndDate');
		echo $this->Form->input('EndYear');
		echo $this->Form->input('EndQuarter');
		echo $this->Form->input('EndMonth');
		echo $this->Form->input('EndWeek');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DimTime.Id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DimTime.Id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Times'), array('action' => 'index')); ?></li>
	</ul>
</div>
