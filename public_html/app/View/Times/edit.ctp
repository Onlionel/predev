<div class="times form">
<?php echo $this->Form->create('Time'); ?>
	<fieldset>
		<legend><?php echo __('Edit Time'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
// 		echo $this->Form->input('time', array('timeFormat' => '24', 'empty' => true, 'value' => $this->Time->format('%H:%M')));
		//NOTE: instantiating DateTime object for microsecond (%u) format
// 		$duration = new DateTime($this->request->data['MediaFile']['duration']);
		echo $this->Form->input('time_string', array(
			'type' => 'time',
			'timeFormat' => '24',
			'hidden' => true,
			'disabled' => true,
			'between' => 
			'H' . $this->Form->hour('time', array('timeFormat' => '24'))
			. '+' . $this->Form->select('Time.time.offset', array('+00' => '+00 ZULU', '+01' => '+02 CET', '+02' => '+02 CEST'), array('name' => 'data[Time][time][offset]', 'value' => '+00'))
			. 'M' . $this->Form->minute('time', array('selected' => $this->request->data['Time']['time']['min']))
			. 'S' . $this->Form->minute('time', array('name' => 'data[Time][time][sec]', 'value' => $this->request->data['Time']['time']['sec']))
 			. '&#181;' . $this->Form->select('Time.time.fraction', range(0,999)/*FIXME: should be 6 digits but php borks*/)
		));
// 		echo $this->Form->input('Time.time.fraction', array(
// 			'type' => 'select', 
// 			'label' => 'Time', 
// 			'name' => 'data[Time][time][fraction]', 
// 			'options' => range(0,999), /*FIXME: should be 6 digits but php borks*/
// 			'empty' => true,
// 			'between' => 
// 			'+' . $this->Form->select('Time.time.offset', array('GMT +00' => '+00'), array('name' => 'data[Time][time][offset]', 'selected' => '+00'))
// 			. 'H' . $this->Form->hour('time', array('timeFormat' => '24'))
// 			. 'M' . $this->Form->minute('time', array('selected' => $this->request->data['Time']['time']['min']))
// 			. 'S' . $this->Form->minute('time', array('name' => 'data[Time][time][sec]', 'value' => $this->request->data['Time']['time']['sec']))
//  			. '&#181;',
// 		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Time'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Time.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Time.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Times'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
