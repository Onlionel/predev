<div class="mediaFiles index">
	<h2><?php echo __('Media Files'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('media_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file_name'); ?></th>
			<th><?php echo $this->Paginator->sort('file_size'); ?></th>
			<th><?php echo $this->Paginator->sort('mime_type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('width'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mediaFiles as $mediaFile): ?>
	<tr>
		<td><?php echo h($mediaFile['MediaFile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mediaFile['Media']['title'], array('controller' => 'media', 'action' => 'view', $mediaFile['Media']['id'])); ?>
		</td>
		<td>
			<?php echo $this->element('MediaFileLink', array('mediaFile' => $mediaFile)); ?>
		</td>
		<td><?php echo h($mediaFile['MediaFile']['file_size']); ?>&nbsp;</td>
		<td><?php echo h($mediaFile['MediaFile']['mime_type']); ?>&nbsp;</td>
		<td><?php echo h($mediaFile['MediaFile']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mediaFile['CreatedBy']['id'], array('controller' => 'users', 'action' => 'view', $mediaFile['CreatedBy']['id'])); ?>
		</td>
		<td><?php echo h($mediaFile['MediaFile']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mediaFile['ModifiedBy']['id'], array('controller' => 'users', 'action' => 'view', $mediaFile['ModifiedBy']['id'])); ?>
		</td>
		<td><?php echo h($mediaFile['MediaFile']['duration']); ?>&nbsp;</td>
		<td><?php echo h($mediaFile['MediaFile']['width']); ?>&nbsp;</td>
		<td><?php echo h($mediaFile['MediaFile']['height']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mediaFile['MediaFile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mediaFile['MediaFile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mediaFile['MediaFile']['id']), array(), __('Are you sure you want to delete # %s?', $mediaFile['MediaFile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Media File'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
