

<?= attach($args['img'],'object-cover md:aspect-[3/2] aspect-[1]') ?>
<?php if (!empty($args['vid'])): ?>
	<button 
		@click="startVid('<?= $args['vid'] ?>')" 
		class="absolute top-auto left-auto z-20 hover:scale-[1.075] duration-200"
	>
		<?= svg('play','') ?>
	</button>
<?php endif ?>