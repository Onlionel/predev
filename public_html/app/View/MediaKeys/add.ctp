<div class="mediaKeys form">
<?php echo $this->Form->create('MediaKey'); ?>
	<fieldset>
		<legend><?php echo __('Add Media Key'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Media Keys'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('controller' => 'media_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media File'), array('controller' => 'media_files', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
