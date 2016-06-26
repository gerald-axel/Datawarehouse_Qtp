<div class="dimCategoriesCourses view">
<h2><?php echo __('Dim Categories Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimCategoriesCourse['DimCategoriesCourse']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CategoryName'); ?></dt>
		<dd>
			<?php echo h($dimCategoriesCourse['DimCategoriesCourse']['CategoryName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CourseName'); ?></dt>
		<dd>
			<?php echo h($dimCategoriesCourse['DimCategoriesCourse']['CourseName']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Categories Course'), array('action' => 'edit', $dimCategoriesCourse['DimCategoriesCourse']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Categories Course'), array('action' => 'delete', $dimCategoriesCourse['DimCategoriesCourse']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimCategoriesCourse['DimCategoriesCourse']['Id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Categories Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Categories Course'), array('action' => 'add')); ?> </li>
	</ul>
</div>
