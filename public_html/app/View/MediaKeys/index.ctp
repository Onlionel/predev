<div class="mediaKeys index">
	<h2><?php echo __('Media Keys'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('media_file_id'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mediaKeys as $mediaKey): ?>
	<tr>
		<td><?php echo h($mediaKey['MediaKey']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mediaKey['MediaFile']['file_name'], array('controller' => 'media_files', 'action' => 'view', $mediaKey['MediaFile']['id'])); ?>
		</td>
		<td><?php echo h($mediaKey['MediaKey']['position']); ?>&nbsp;</td>
		<td><?php echo h($mediaKey['MediaKey']['title']); ?>&nbsp;</td>
		<td><?php echo h($mediaKey['MediaKey']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mediaKey['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $mediaKey['CreatedBy']['id'])); ?>
		</td>
		<td><?php echo h($mediaKey['MediaKey']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mediaKey['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $mediaKey['ModifiedBy']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mediaKey['MediaKey']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mediaKey['MediaKey']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mediaKey['MediaKey']['id']), array(), __('Are you sure you want to delete # %s?', $mediaKey['MediaKey']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Media Key'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Media Files'), array('controller' => 'media_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media File'), array('controller' => 'media_files', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Created By'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
