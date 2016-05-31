<div class="dimAssistants view">
<h2><?php echo __('Dim Assistant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimAssistant['DimAssistant']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dimAssistant['DimAssistant']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paternal Last Name'); ?></dt>
		<dd>
			<?php echo h($dimAssistant['DimAssistant']['Paternal_last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maternal Last Name'); ?></dt>
		<dd>
			<?php echo h($dimAssistant['DimAssistant']['Maternal_last_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Assistant'), array('action' => 'edit', $dimAssistant['DimAssistant']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Assistant'), array('action' => 'delete', $dimAssistant['DimAssistant']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimAssistant['DimAssistant']['Id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Assistants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Assistant'), array('action' => 'add')); ?> </li>
	</ul>
</div>
