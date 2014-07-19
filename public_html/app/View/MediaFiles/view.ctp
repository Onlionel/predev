<div class="mediaFiles view">
<h2><?php echo __('Media File'); ?></h2>
	<dl>
		<dt><?php echo __('Preview'); ?></dt>
		<dd>
			<?php echo $this->element('MediaFilePreview', array('mediaFile' => $mediaFile)); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mediaFile['Media']['title'], array('controller' => 'media', 'action' => 'view', $mediaFile['Media']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo $this->element('MediaFileLink', array('mediaFile' => $mediaFile)); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Size'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['file_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mime Type'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['mime_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mediaFile['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $mediaFile['CreatedBy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mediaFile['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $mediaFile['ModifiedBy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['height']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Media File'), array('action' => 'edit', $mediaFile['MediaFile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Media File'), array('action' => 'delete', $mediaFile['MediaFile']['id']), array(), __('Are you sure you want to delete # %s?', $mediaFile['MediaFile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media File'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Keys'), array('controller' => 'media_keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media Key'), array('controller' => 'media_keys', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($mediaFile['Log'])): ?>
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
	<?php foreach ($mediaFile['Log'] as $log): ?>
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
<div class="related">
	<h3><?php echo __('Related Media Keys'); ?></h3>
	<?php if (!empty($mediaFile['MediaKey'])): ?>
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
	<?php foreach ($mediaFile['MediaKey'] as $mediaKey): ?>
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
	