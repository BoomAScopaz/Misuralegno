<?php if ($args['url'] ?? 0): ?>
	<a 
		class="<?= $args['class'] ?>" 
		target="<?= $args['target'] ?? 0 ?>" 
		href="<?= $args['url'] ?>" 
	>
		<?= ($args['icon'] ?? 0) ? svg($args['icon']) : null ?>
		<span><?= $args['title'] ?? 'bottone' ?></span>
	</a>
<?php endif ?>