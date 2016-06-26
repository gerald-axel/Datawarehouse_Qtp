<div class="dimPromotions form">
<?php echo $this->Form->create('DimPromotion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dim Promotion'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('Percent');
		echo $this->Form->input('Code');
		echo $this->Form->input('Author');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DimPromotion.Id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DimPromotion.Id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Promotions'), array('action' => 'index')); ?></li>
	</ul>
</div>
