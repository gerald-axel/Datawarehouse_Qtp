<div class="dimEmailings view">
<h2><?php echo __('Dim Emailing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimEmailing['DimEmailing']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($dimEmailing['DimEmailing']['Type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($dimEmailing['DimEmailing']['Description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Emailing'), array('action' => 'edit', $dimEmailing['DimEmailing']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Emailing'), array('action' => 'delete', $dimEmailing['DimEmailing']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimEmailing['DimEmailing']['Id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Emailings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Emailing'), array('action' => 'add')); ?> </li>
	</ul>
</div>
