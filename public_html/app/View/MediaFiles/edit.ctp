<div class="mediaFiles form">
<?php echo $this->Form->create('MediaFile', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Edit Media File'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('media_id');
//TODO: enable re-upload same filename 		echo $this->Form->input('file', array('type' => 'file'));
		echo $this->Form->input('file_name', array('readonly' => true));
		echo $this->Form->input('file_size', array('readonly' => true));
		echo $this->Form->input('mime_type', array('readonly' => true));
// 		echo $this->Form->input('duration', array('type' => 'text'));
// 		echo $this->Form->input('duration', array('type' => 'time'));
		//NOTE: instantiating DateTime object for microsecond (%u) format
// 		$duration = new DateTime($this->request->data['MediaFile']['duration']);
		echo $this->Form->input('duration', array(
			'type' => 'select', 
			'name' => 'data[MediaFile][duration][msec]', 
			'options' => range(0,999), //FIXME: should be 6 digits but php borks
			'empty' => true,
			'between' => 
			'H' . $this->Form->hour('duration', array('timeFormat' => '24'))
			. 'M' . $this->Form->minute('duration', array('selected' => $this->Time->format($this->request->data['MediaFile']['duration'], '%M')))
			. 'S' . $this->Form->minute('duration', array('name' => 'data[MediaFile][duration][sec]', 'value' => $this->Time->format($this->request->data['MediaFile']['duration'], '%S')))
 			. '&#181;',
// 			'selected' => substr($this->Time->format($this->request->data['MediaFile']['duration'], '%u'), 0, 3) //truncate to millisec
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MediaFile.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MediaFile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
