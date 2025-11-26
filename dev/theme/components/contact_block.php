<section class="contact_block md:my-[5rem] mt-[1.5rem] mb-[4rem]">
	<div class="container">
		<div class="grid md:grid-cols-2 items-center">
			<a href="https://www.google.com/maps/dir/?api=1&destination=45.9430453,12.5113456" target="_blank" class="relative md:mb-0 mb-[2rem] [&>span]:hover:opacity-60">
				<?= attach($args['img_map']) ?>
				<span class="absolute w-full h-full bg-dark opacity-0 duration-[0.3s] top-0 left-0 flex justify-center items-center text-[1.25rem]">
					Guarda nella mappa
				</span>
			</a>
			<div class="">
				<div class="text-[1.2rem] md:px-[8%]">
					<div class="mb-[3rem]"><?= $args['text'] ?></div>
					<?php if (!empty($args['info'])): ?>
						<div class="grid gap-6">
							<?php foreach ($args['info'] as $key => $info): ?>
								<div class="flex items-center gap-3 text-[.875rem]">
									<?= svg($key.'-icon','shrink-0 w-[2.5rem]') ?> 
									<b><?= $info ?></b>
									
								</div>
							<?php endforeach ?>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>
