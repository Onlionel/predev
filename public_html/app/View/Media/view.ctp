<div class="media view">
<h2><?php echo __('Media'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($media['Media']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($media['Media']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($media['Media']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($media['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $media['CreatedBy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($media['Media']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($media['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $media['ModifiedBy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Media'), array('action' => 'edit', $media['Media']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Media'), array('action' => 'delete', $media['Media']['id']), array(), __('Are you sure you want to delete # %s?', $media['Media']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Media'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('controller' => 'media_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media Files'), array('controller' => 'media_files', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Media Files'); ?></h3>
	<?php if (!empty($media['MediaFiles'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Media Id'); ?></th>
		<th><?php echo __('File Name'); ?></th>
		<th><?php echo __('File Size'); ?></th>
		<th><?php echo __('Mime Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($media['MediaFiles'] as $mediaFiles): ?>
		<tr>
			<td><?php echo $mediaFiles['id']; ?></td>
			<td><?php echo $mediaFiles['media_id']; ?></td>
			<td>
				<?php echo $this->element('MediaFileLink', array('mediaFile' => array('MediaFile' => $mediaFiles))); ?>
			</td>
			<td><?php echo $mediaFiles['file_size']; ?></td>
			<td><?php echo $mediaFiles['mime_type']; ?></td>
			<td><?php echo $mediaFiles['created']; ?></td>
			<td><?php echo $mediaFiles['created_by']; ?></td>
			<td><?php echo $mediaFiles['modified']; ?></td>
			<td><?php echo $mediaFiles['modified_by']; ?></td>
			<td><?php echo $mediaFiles['duration']; ?></td>
			<td><?php echo $mediaFiles['width']; ?></td>
			<td><?php echo $mediaFiles['height']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'media_files', 'action' => 'view', $mediaFiles['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'media_files', 'action' => 'edit', $mediaFiles['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'media_files', 'action' => 'delete', $mediaFiles['id']), array(), __('Are you sure you want to delete # %s?', $mediaFiles['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Media Files'), array('controller' => 'media_files', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
