<section class="slideshow_realizations appear-up">
	<div class="bg-dark xl:pt-[10rem] md:pt-[6rem] pt-[3rem] pb-[3.5rem] ">
		<div class="container flex lg:flex-row flex-col justify-between items-center">
			<div class="md:text-[2.75rem] text-[2.5rem] leading-[1.2] font-bold lg:text-left text-center anim-el">
				<?= $args['titolo'] ?>
			</div>
				
			<div class="shrink-0 mt-5 lg:mt-0 anim-el">
				<?php button($args['link'],'btn light-btn ') ?>
			</div>
		</div>
	</div>
	<div class="relative ">
		<div class="absolute top-0 left-0 w-full bg-dark h-1/2"></div>
		<div class="swiper relative z-10 anim-el">
			<div class="swiper-wrapper">
				<?php foreach ($args['gallery'] as $img): ?>
					<div class="swiper-slide">
						<?= attach($img, 'object-cover aspect-1') ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="flex justify-center items-center mt-[2rem] gap-[1rem] anim-el">
		<button class="prev-slide">
			<?= svg('arrow') ?>
		</button>
		<button class="next-slide">
			<?= svg('arrow','rotate-[180deg]') ?>
		</button>
	</div>
</section>
