<div class="mediaFiles form">
<?php echo $this->Form->create('MediaFile', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add Media File'); ?></legend>
	<?php
		echo $this->Form->input('media_id');
		echo $this->Form->input('file', array('type' => 'file'));
		echo $this->Form->input('file_name', array('readonly' => true));
		echo $this->Form->input('file_size', array('readonly' => true));
		echo $this->Form->input('mime_type', array('readonly' => true));
// 		echo $this->Form->input('duration', array('type' => 'text'));
// 		echo $this->Form->input('duration', array('type' => 'time'));
		echo $this->Form->input('duration', array(
			'type' => 'select', 
			'name' => 'data[MediaFile][duration][msec]', 
			'options' => range(0,999), 
			'empty' => true,
			'between' => 
			'H' . $this->Form->hour('duration', array('timeFormat' => '24'))
			. 'M' . $this->Form->minute('duration')
			. 'S' . $this->Form->minute('duration', array('name' => 'data[MediaFile][duration][sec]'))
			. 'F'
		));
		echo $this->Form->input('width');
		echo $this->Form->input('height');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Media Files'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
