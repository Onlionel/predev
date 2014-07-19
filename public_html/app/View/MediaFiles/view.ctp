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
			<?php echo $this->Html->link($mediaFile['CreatedBy']['id'], array('controller' => 'users', 'action' => 'view', $mediaFile['CreatedBy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mediaFile['MediaFile']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mediaFile['ModifiedBy']['id'], array('controller' => 'users', 'action' => 'view', $mediaFile['ModifiedBy']['id'])); ?>
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
	</ul>
</div>
