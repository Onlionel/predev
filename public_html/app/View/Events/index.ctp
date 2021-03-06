<div class="events index">
	<h2><?php echo __('Events'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('audience_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_id'); ?></th>
			<th><?php echo $this->Paginator->sort('time_id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('purpose_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $event['Activity']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Audience']['name'], array('controller' => 'audiences', 'action' => 'view', $event['Audience']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Date']['name'], array('controller' => 'dates', 'action' => 'view', $event['Date']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Time']['name'], array('controller' => 'times', 'action' => 'view', $event['Time']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Location']['name'], array('controller' => 'locations', 'action' => 'view', $event['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Purpose']['name'], array('controller' => 'purposes', 'action' => 'view', $event['Purpose']['id'])); ?>
		</td>
		<td><?php echo h($event['Event']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $event['CreatedBy']['id'])); ?>
		</td>
		<td><?php echo h($event['Event']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $event['ModifiedBy']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), array(), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Audiences'), array('controller' => 'audiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audience'), array('controller' => 'audiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Times'), array('controller' => 'times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time'), array('controller' => 'times', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purposes'), array('controller' => 'purposes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purpose'), array('controller' => 'purposes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Keys'), array('controller' => 'media_keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media Key'), array('controller' => 'media_keys', 'action' => 'add')); ?> </li>
	</ul>
</div>
