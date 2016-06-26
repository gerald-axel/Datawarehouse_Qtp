<div class="dimAssistants form">
<?php echo $this->Form->create('DimAssistant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dim Assistant'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('Name');
		echo $this->Form->input('Paternal_last_name');
		echo $this->Form->input('Maternal_last_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DimAssistant.Id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DimAssistant.Id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Assistants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Facts'), array('controller' => 'facts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fact'), array('controller' => 'facts', 'action' => 'add')); ?> </li>
	</ul>
</div>
