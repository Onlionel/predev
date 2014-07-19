<div class="mediaKeys view">
<h2><?php echo __('Media Key'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mediaKey['MediaKey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media File'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mediaKey['MediaFile']['file_name'], array('controller' => 'media_files', 'action' => 'view', $mediaKey['MediaFile']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($mediaKey['MediaKey']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($mediaKey['MediaKey']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mediaKey['MediaKey']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mediaKey['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $mediaKey['CreatedBy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mediaKey['MediaKey']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mediaKey['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $mediaKey['ModifiedBy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Media Key'), array('action' => 'edit', $mediaKey['MediaKey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Media Key'), array('action' => 'delete', $mediaKey['MediaKey']['id']), array(), __('Are you sure you want to delete # %s?', $mediaKey['MediaKey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Keys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media Key'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('controller' => 'media_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media File'), array('controller' => 'media_files', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($mediaKey['Log'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Model Id'); ?></th>
		<th><?php echo __('Model Guid'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Change'); ?></th>
		<th><?php echo __('Version Id'); ?></th>
		<th><?php echo __('Ip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mediaKey['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['title']; ?></td>
			<td><?php echo $log['created']; ?></td>
			<td><?php echo $log['description']; ?></td>
			<td><?php echo $log['model']; ?></td>
			<td><?php echo $log['model_id']; ?></td>
			<td><?php echo $log['model_guid']; ?></td>
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
