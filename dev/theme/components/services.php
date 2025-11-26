<section class="services bg-dark lg:pt-0 pt-[0rem]">
	<div class="container">
		<h3 class="md:text-[3rem] sm:text-[2.25rem] text-[2rem] xl:mb-[10rem] md:lg:mb-[6rem] py-[2.5rem] md:text-left text-center">I nostri servizi</h3>
		<?php if ($args['service']): ?>
			<div class="grid lg:gap-[4rem] md:gap-[2.5rem] gap-[2rem]">
				<?php foreach ($args['service'] as $key => $block): ?>
					<div class="grid md:grid-cols-5 grid-cols-1 items-center">
						<div class="col-span-2">
							<?= attach($block['img'],'object-cover md:aspect-[4/5]  w-full md:mb-0 mb-5') ?>
						</div>
						<div class="col-span-3 md:pl-[10%] lg:pr-[25%]">
							<div class="t-outline md:mb-5 mb-1 lg:text-[5vw] md:text-[2.2rem] text-[1.25rem] font-bold text-dark">
								<?= $block['title'] ?>
							</div>
							<?= $block['text'] ?>
						</div>	
					</div>
				<?php endforeach ?>
			</div>
		<?php endif ?>
	</div>
</section>