<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $event['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Audience'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Audience']['name'], array('controller' => 'audiences', 'action' => 'view', $event['Audience']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Date']['title'], array('controller' => 'dates', 'action' => 'view', $event['Date']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['time_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Location']['name'], array('controller' => 'locations', 'action' => 'view', $event['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purpose'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Purpose']['name'], array('controller' => 'purposes', 'action' => 'view', $event['Purpose']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($event['Event']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $event['CreatedBy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($event['Event']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $event['ModifiedBy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array(), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
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
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Keys'), array('controller' => 'media_keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media Key'), array('controller' => 'media_keys', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($event['Log'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Model Id'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Change'); ?></th>
		<th><?php echo __('Version Id'); ?></th>
		<th><?php echo __('Ip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['title']; ?></td>
			<td><?php echo $log['created']; ?></td>
			<td><?php echo $log['description']; ?></td>
			<td><?php echo $log['model']; ?></td>
			<td><?php echo $log['model_id']; ?></td>
			<td><?php echo $log['action']; ?></td>
			<td><?php echo $log['user_id']; ?></td>
			<td><?php echo $log['change']; ?></td>
			<td><?php echo $log['version_id']; ?></td>
			<td><?php echo $log['ip']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'logs', 'action' => 'delete', $log['id']), array(), __('Are you sure you want to delete # %s?', $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($event['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['created_by']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td><?php echo $project['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), array(), __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Media Keys'); ?></h3>
	<?php if (!empty($event['MediaKey'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Media File Id'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['MediaKey'] as $mediaKey): ?>
		<tr>
			<td><?php echo $mediaKey['id']; ?></td>
			<td><?php echo $mediaKey['media_file_id']; ?></td>
			<td><?php echo $mediaKey['position']; ?></td>
			<td><?php echo $mediaKey['title']; ?></td>
			<td><?php echo $mediaKey['created']; ?></td>
			<td><?php echo $mediaKey['created_by']; ?></td>
			<td><?php echo $mediaKey['modified']; ?></td>
			<td><?php echo $mediaKey['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'media_keys', 'action' => 'view', $mediaKey['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'media_keys', 'action' => 'edit', $mediaKey['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'media_keys', 'action' => 'delete', $mediaKey['id']), array(), __('Are you sure you want to delete # %s?', $mediaKey['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Media Key'), array('controller' => 'media_keys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
