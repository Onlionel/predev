<div class="media form">
<?php echo $this->Form->create('Media'); ?>
	<fieldset>
		<legend><?php echo __('Edit Media'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Media.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Media.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Media'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('controller' => 'media_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media Files'), array('controller' => 'media_files', 'action' => 'add')); ?> </li>
	</ul>
</div>
