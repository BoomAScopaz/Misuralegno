<section x-data="videopopup()" class="double_images ">
	<div class="relative my-0 sm:my-0 md:my-0">
		<div class="md:container mx-auto relative z-10">
			<div class=" grid md:grid-cols-9 grid-cols-2 items-center xl:gap-[5rem] md:gap-[3rem] md:gap-[1rem]">
				
				<!-- img left -->
				<div class="img-wrap md:col-span-5 relative flex justify-center items-center">
					<?= attach($args['img_l'],'mask object-cover md:aspect-[3/2] aspect-[1]') ?>
					<?php if (!empty($args['vid_l'])): ?>
						<button @click="openPopup('<?= $args['vid_l'] ?>')" class="absolute top-auto left-auto z-20 hover:scale-[1.075] duration-200">
							<?= svg('play','') ?>
						</button>
					<?php endif ?>
				</div>

				<!-- img right -->
				<div class="img-wrap md:col-span-4 relative flex justify-center items-center">
					<?= attach($args['img_r'],'mask object-cover md:aspect-[3/4] aspect-[1]') ?>
					<?php if (!empty($args['vid_r'])): ?>
						<button @click="openPopup('<?= $args['vid_r'] ?>')" class="absolute top-auto left-auto z-20 hover:scale-[1.075] duration-200">
							<?= svg('play','') ?>
						</button>
					<?php endif ?>
				</div>

			</div>
		</div>
		<div class="absolute left-0 bottom-0 bg-dark w-full md:h-1/2"></div>
	</div>

	<!-- popup -->
	<?php if (!empty($args['vid_l']) || !empty($args['vid_r'])): ?>

		<div x-show="isOpen && videoUrl" @click="closePopup()" class="fixed top-0 left-0 w-full h-[100svh] z-[50] bg-dark/80">

		<div x-show="isOpen && videoUrl" class="popup fixed top-0 left-0 w-full h-[100svh] z-[50] flex justify-center items-center">
			<div @click="closePopup()" class="absolute right-5 top-5 text-dark text-[1.5rem] cursor-pointer bg-white flex justify-center items-center w-[1.5rem] h-[1.5rem]">
				&times
			</div>
			<template x-if="isOpen && videoUrl">
				<video 
					class="  w-auto md:max-w-[1000px] md:max-h-[80vh]" 
					autoplay loop muted controls playsinline 
					:src="videoUrl" 
					type="video/mp4">
				</video>
			</template>
		</div>
	<?php endif ?>

</section>



				


