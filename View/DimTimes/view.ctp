<div class="dimTimes view">
<h2><?php echo __('Dim Time'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDate'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['StartDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartYear'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['StartYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartQuarter'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['StartQuarter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartMonth'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['StartMonth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartWeek'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['StartWeek']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDate'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['EndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndYear'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['EndYear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndQuarter'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['EndQuarter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndMonth'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['EndMonth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndWeek'); ?></dt>
		<dd>
			<?php echo h($dimTime['DimTime']['EndWeek']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Time'), array('action' => 'edit', $dimTime['DimTime']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Time'), array('action' => 'delete', $dimTime['DimTime']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimTime['DimTime']['Id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Time'), array('action' => 'add')); ?> </li>
	</ul>
</div>
