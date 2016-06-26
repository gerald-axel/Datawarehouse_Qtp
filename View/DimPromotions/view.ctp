<div class="dimPromotions view">
<h2><?php echo __('Dim Promotion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dimPromotion['DimPromotion']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($dimPromotion['DimPromotion']['Percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($dimPromotion['DimPromotion']['Code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($dimPromotion['DimPromotion']['Author']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dim Promotion'), array('action' => 'edit', $dimPromotion['DimPromotion']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dim Promotion'), array('action' => 'delete', $dimPromotion['DimPromotion']['Id']), array('confirm' => __('Are you sure you want to delete # %s?', $dimPromotion['DimPromotion']['Id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dim Promotions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dim Promotion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
