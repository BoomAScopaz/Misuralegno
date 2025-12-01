<section 
	class="processing_grid bg-dark relative lg:pb-[8rem] sm:pb-[5rem] pb-[4rem]" 
	x-data="boxresize()" 
	x-init="updateHeight(); window.addEventListener('resize', () => updateHeight() )"
>
	<div 
		class="absolute bg-light w-full" 
		:style="{ height: (height / 2) + 'px'}" >
	</div>
			
	<div class="container appear-up">
		<?php if (!empty($args['grid'])): ?>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 xl:gap-12 gap-10 relative z-10">
				<?php foreach ($args['grid'] as $key => $value): ?>
					<div class="anim-el">
						<div <?= !$key ? 'x-ref="box"' : ''?>>
							<?= attach($value['img'],'aspect-[1] object-cover w-full') ?>
						</div>
						<div class="text-[1.125rem] uppercase font-bold lg:my-7 mt-4 mb-0">
							<?= $value['title'] ?>
						</div>
						<?= $value['text'] ?>
					</div>
				<?php endforeach ?>
			</div>
		<?php endif ?>
	</div>
</section>

