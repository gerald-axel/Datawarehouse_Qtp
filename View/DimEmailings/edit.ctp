<div class="dimEmailings form">
<?php echo $this->Form->create('DimEmailing'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dim Emailing'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('Type');
		echo $this->Form->input('Description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DimEmailing.Id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DimEmailing.Id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Emailings'), array('action' => 'index')); ?></li>
	</ul>
</div>
