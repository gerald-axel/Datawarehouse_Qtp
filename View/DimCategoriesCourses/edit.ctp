<div class="dimCategoriesCourses form">
<?php echo $this->Form->create('DimCategoriesCourse'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dim Categories Course'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('CategoryName');
		echo $this->Form->input('CourseName');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DimCategoriesCourse.Id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DimCategoriesCourse.Id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dim Categories Courses'), array('action' => 'index')); ?></li>
	</ul>
</div>
