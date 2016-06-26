<div class="dimRegions view">
<h2><?php echo __('Dim Region'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimRegion['DimRegion']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($dimRegion['DimRegion']['Region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($dimRegion['DimRegion']['Country']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Region'), array('action' => 'edit', $dimRegion['DimRegion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Region'), array('action' => 'delete', $dimRegion['DimRegion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimRegion['DimRegion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Regions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Region'), array('action' => 'add')); ?> </li>
	</ul>
</div>
