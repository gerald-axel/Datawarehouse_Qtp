<div class="dimAssistants form">
<?php echo $this->Form->create('DimAssistant'); ?>
	<fieldset>
		<legend><?php echo __('Add Dim Assistant'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Dim Assistants'), array('action' => 'index')); ?></li>
	</ul>
</div>
