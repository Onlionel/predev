<div class="mediaKeys form">
<?php echo $this->Form->create('MediaKey'); ?>
	<fieldset>
		<legend><?php echo __('Edit Media Key'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('media_file_id');
		echo $this->Form->input('position');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MediaKey.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MediaKey.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Media Keys'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('controller' => 'media_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media File'), array('controller' => 'media_files', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
