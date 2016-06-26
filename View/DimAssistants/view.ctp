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
		<li><?php echo $this->Html->link(__('List Facts'), array('controller' => 'facts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fact'), array('controller' => 'facts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Facts'); ?></h3>
	<?php if (!empty($dimAssistant['Fact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CategoryCourseID'); ?></th>
		<th><?php echo __('StatusID'); ?></th>
		<th><?php echo __('TimeID'); ?></th>
		<th><?php echo __('AssistantID'); ?></th>
		<th><?php echo __('EmalingID'); ?></th>
		<th><?php echo __('PromotionID'); ?></th>
		<th><?php echo __('PaymentType'); ?></th>
		<th><?php echo __('RegionID'); ?></th>
		<th><?php echo __('MoneyLoose'); ?></th>
		<th><?php echo __('MoneyOwe'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dimAssistant['Fact'] as $fact): ?>
		<tr>
			<td><?php echo $fact['CategoryCourseID']; ?></td>
			<td><?php echo $fact['StatusID']; ?></td>
			<td><?php echo $fact['TimeID']; ?></td>
			<td><?php echo $fact['AssistantID']; ?></td>
			<td><?php echo $fact['EmalingID']; ?></td>
			<td><?php echo $fact['PromotionID']; ?></td>
			<td><?php echo $fact['PaymentType']; ?></td>
			<td><?php echo $fact['RegionID']; ?></td>
			<td><?php echo $fact['MoneyLoose']; ?></td>
			<td><?php echo $fact['MoneyOwe']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'facts', 'action' => 'view', $fact['AssistantID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'facts', 'action' => 'edit', $fact['AssistantID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'facts', 'action' => 'delete', $fact['AssistantID']), array('confirm' => __('Are you sure you want to delete # %s?', $fact['AssistantID']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fact'), array('controller' => 'facts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
