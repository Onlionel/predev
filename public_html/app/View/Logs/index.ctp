<div class="logs index">
	<h2><?php echo __('Logs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('model_id'); ?></th>
			<th><?php echo $this->Paginator->sort('action'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('change'); ?></th>
			<th><?php echo $this->Paginator->sort('version_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($logs as $log): ?>
	<tr>
		<td><?php echo h($log['Log']['id']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['title']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['created']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['description']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['model']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['model_id']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['action']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($log['User']['id'], array('controller' => 'users', 'action' => 'view', $log['User']['id'])); ?>
		</td>
		<td><?php echo h($log['Log']['change']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['version_id']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['ip']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $log['Log']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $log['Log']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $log['Log']['id']), array(), __('Are you sure you want to delete # %s?', $log['Log']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
