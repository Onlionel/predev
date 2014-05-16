<div class="purposes view">
<h2><?php echo __('Purpose'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($purpose['Purpose']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($purpose['Purpose']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($purpose['Purpose']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($purpose['Purpose']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($purpose['Purpose']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($purpose['Purpose']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purpose'), array('action' => 'edit', $purpose['Purpose']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purpose'), array('action' => 'delete', $purpose['Purpose']['id']), array(), __('Are you sure you want to delete # %s?', $purpose['Purpose']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Purposes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purpose'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($purpose['Project'])): ?>
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
	<?php foreach ($purpose['Project'] as $project): ?>
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
