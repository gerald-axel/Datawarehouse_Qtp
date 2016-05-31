<div class="facts form">
<?php echo $this->Form->create('Fact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fact'); ?></legend>
	<?php
		echo $this->Form->input('CategoryCourseID');
		echo $this->Form->input('StatusID');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EndDate');
		echo $this->Form->input('AssistantID');
		echo $this->Form->input('EmalingID');
		echo $this->Form->input('PromotionID');
		echo $this->Form->input('PaymentType');
		echo $this->Form->input('MoneyLoose');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Fact.AssistantID')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Fact.AssistantID')))); ?></li>
		<li><?php echo $this->Html->link(__('List Facts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Assistants'), array('controller' => 'dim_assistants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Assistant'), array('controller' => 'dim_assistants', 'action' => 'add')); ?> </li>
	</ul>
</div>
