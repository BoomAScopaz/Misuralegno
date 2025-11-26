<section class="double_images relative my-0 sm:my-0 md:my-0">
	<div class="md:container mx-auto relative z-10">
		<!-- <div class=" flex md:flex-row flex-col space-between items-center md:gap-[5rem] gap-[1rem]"> -->
		<div class=" grid md:grid-cols-9 grid-cols-2 items-center xl:gap-[5rem] md:gap-[3rem] md:gap-[1rem]">
			<div class="md:col-span-5">
				<?= attach($args['img_l'],'object-cover md:aspect-[3/2] aspect-[1]') ?>
			</div>
			<div class="md:col-span-4">
				<?= attach($args['img_r'],'object-cover md:aspect-[3/4] aspect-[1]') ?>
			</div>
		</div>
	</div>
	<div class="absolute left-0 bottom-0 bg-dark w-full md:h-1/2"></div>
</section>

<?php //pre($args) ?>