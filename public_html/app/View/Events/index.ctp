<div class="events index">
	<h2><?php echo __('Events'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('audience_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('purpose_id'); ?></th>
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
			<?php echo $this->Html->link($event['Date']['title'], array('controller' => 'dates', 'action' => 'view', $event['Date']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Location']['name'], array('controller' => 'locations', 'action' => 'view', $event['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['Purpose']['name'], array('controller' => 'purposes', 'action' => 'view', $event['Purpose']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purposes'), array('controller' => 'purposes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purpose'), array('controller' => 'purposes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>