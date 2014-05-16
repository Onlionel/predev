<div class="projects view">
<h2><?php echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $project['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Audience'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Audience']['name'], array('controller' => 'audiences', 'action' => 'view', $project['Audience']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Date']['title'], array('controller' => 'dates', 'action' => 'view', $project['Date']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Location']['name'], array('controller' => 'locations', 'action' => 'view', $project['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purpose'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Purpose']['name'], array('controller' => 'purposes', 'action' => 'view', $project['Purpose']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), array(), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
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
	</ul>
</div>
