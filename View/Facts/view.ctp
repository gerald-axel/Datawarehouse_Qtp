<div class="facts view">
<h2><?php echo __('Fact'); ?></h2>
	<dl>
		<dt><?php echo __('CategoryCourseID'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['CategoryCourseID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StatusID'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['StatusID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDate'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['StartDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndDate'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['EndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AssistantID'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['AssistantID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmalingID'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['EmalingID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PromotionID'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['PromotionID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentType'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['PaymentType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MoneyLoose'); ?></dt>
		<dd>
			<?php echo h($fact['Fact']['MoneyLoose']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fact'), array('action' => 'edit', $fact['Fact']['AssistantID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fact'), array('action' => 'delete', $fact['Fact']['AssistantID']), array('confirm' => __('Are you sure you want to delete # %s?', $fact['Fact']['AssistantID']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Facts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Assistants'), array('controller' => 'dim_assistants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Assistant'), array('controller' => 'dim_assistants', 'action' => 'add')); ?> </li>
	</ul>
</div>
