			<object
				data="/files/<?php echo h($mediaFile['MediaFile']['file_name']); ?>"
				type="<?php echo h($mediaFile['MediaFile']['mime_type']); ?>"
			<?php if(!empty($mediaFile['MediaFile']['width'])): ?>
				width="<?php echo h($mediaFile['MediaFile']['width']); ?>"
			<?php else: ?>
				width="100%"
			<?php endif; ?>
			<?php if(!empty($mediaFile['MediaFile']['height'])): ?>
				height="<?php echo h($mediaFile['MediaFile']['height'] + 16); ?>"
			<?php else: ?>
				height="100%"
			<?php endif; ?>
				>
				<param name="src" value="/files/<?php echo h($mediaFile['MediaFile']['file_name']); ?>" />
				<param name="controller" value="true" />
				<param name="scale" value="aspect" />
			</object>
