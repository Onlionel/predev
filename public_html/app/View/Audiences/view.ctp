<div class="audiences view">
<h2><?php echo __('Audience'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($audience['Audience']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($audience['Audience']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Audience'), array('action' => 'edit', $audience['Audience']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Audience'), array('action' => 'delete', $audience['Audience']['id']), array(), __('Are you sure you want to delete # %s?', $audience['Audience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Audiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($audience['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Audience Id'); ?></th>
		<th><?php echo __('Date Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Purpose Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($audience['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['activity_id']; ?></td>
			<td><?php echo $project['audience_id']; ?></td>
			<td><?php echo $project['date_id']; ?></td>
			<td><?php echo $project['location_id']; ?></td>
			<td><?php echo $project['purpose_id']; ?></td>
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