<section class="hero_home relative text-white bg-light appear-up">

	<div class="absolute top-0 left-0 z-[0] bg-dark w-full lg:h-[40vh] h-full"></div>

	<div class="lg:container mx-auto relative z-[2]">

		<div class="relative">
			
			<!-- image/video -->
			<?php if (empty($args['video'])): ?>
				<?= attach($args['img'],'w-full object-cover md:h-[66vh] h-[calc(100svh-4rem)]') ?>
			<?php else: ?>
				<?= video($args['video']['url'], 'w-full object-cover md:h-[66vh] h-[calc(100svh-4rem)]') ?>
			<?php endif ?>

			
			<!-- title -->
			<div class="absolute left-0 xl:bottom-[16%] bottom-[50%] w-full flex flex-col items-center text-center xl:translate-y-0 translate-y-[50%] anim-el">

				<h1 class="lg:border-[5px] border-[3px] border-white lg:px-5 px-5 py-2 w-fit uppercase lg:mb-[1rem] text-[2rem] lg:text-[3rem] xl:text-[5rem] leading-[1.2] ">
					<?= $args['titolo'] ?>
				</h1>		
				<div class="lg:text-[1.75rem] lg:mt-0 mt-3">dal 1989</div>
			</div>

		</div>

	</div>

</section>
