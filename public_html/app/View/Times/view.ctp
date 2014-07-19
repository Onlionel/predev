<div class="times view">
<h2><?php echo __('Time'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($time['Time']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($time['Time']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($time['Time']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($time['Time']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($time['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $time['CreatedBy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($time['Time']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($time['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $time['ModifiedBy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time'), array('action' => 'edit', $time['Time']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time'), array('action' => 'delete', $time['Time']['id']), array(), __('Are you sure you want to delete # %s?', $time['Time']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($time['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Audience Id'); ?></th>
		<th><?php echo __('Date Id'); ?></th>
		<th><?php echo __('Time Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Purpose Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($time['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['activity_id']; ?></td>
			<td><?php echo $event['audience_id']; ?></td>
			<td><?php echo $event['date_id']; ?></td>
			<td><?php echo $event['time_id']; ?></td>
			<td><?php echo $event['location_id']; ?></td>
			<td><?php echo $event['purpose_id']; ?></td>
			<td><?php echo $event['created']; ?></td>
			<td><?php echo $event['created_by']; ?></td>
			<td><?php echo $event['modified']; ?></td>
			<td><?php echo $event['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array(), __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
