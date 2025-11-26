<section class="contact_banner <?= $args['bg_color'] ?> pt-[6rem]">

	<div class="relative">
		<div class="w-full max-w-[1100px] min-h-[500px] bg-dark text-center relative z-10 flex items-center justify-center overflow-hidden mx-auto">
			<?= svg('outline-logo','absolute top-0 left-auto md:translate-y-[20%] md:opacity-50 opacity-30') ?>	

			<div class="md:max-w-[60%] px-4 text-center relative z-10">
				<div class="md:text-[3rem] text-[2rem] font-bold leading-[1.125]">
					<?= $args['title'] ?>
				</div>
				<div class="mt-4 mb-[2.5rem]">
					<?= $args['testo'] ?>
				</div>
				<?php button($args['link'],'btn light-btn mx-auto') ?>
			</div>
		</div>
		<div class="absolute bottom-0 left-0 w-full h-1/2 bg-white"></div>
	</div>
		
</section>
