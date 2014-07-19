<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('activity_id', array('empty' => true));
		echo $this->Form->input('Activity.name');
		echo $this->Form->input('audience_id', array('empty' => true));
		echo $this->Form->input('Audience.name');
		echo $this->Form->input('date_id', array('empty' => true));
		echo $this->Form->input('Date.date');
		echo $this->Form->input('time_id', array('empty' => true));
		echo $this->Form->input('Time.time');
		echo $this->Form->input('location_id', array('empty' => true));
		echo $this->Form->input('Location.name');
		echo $this->Form->input('purpose_id', array('empty' => true));
		echo $this->Form->input('Purpose.name');
		echo $this->Form->input('Project', array('multiple' => 'checkbox'));
		echo $this->Form->input('MediaKey', array('multiple' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Audiences'), array('controller' => 'audiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audience'), array('controller' => 'audiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purposes'), array('controller' => 'purposes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purpose'), array('controller' => 'purposes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Keys'), array('controller' => 'media_keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media Key'), array('controller' => 'media_keys', 'action' => 'add')); ?> </li>
	</ul>
</div>
