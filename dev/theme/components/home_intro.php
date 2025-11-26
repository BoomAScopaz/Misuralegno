<section class="home_intro">
	<div class="container xl:pt-[6rem] md:pt-[4rem] py-[3.5rem]">
		<div class="grid md:grid-cols-12 lg:gap-[3rem] md:gap-[2rem] gap-[1.5rem] items-center">
			<div class="2xl:col-span-5 md:col-span-6 relative flex md:justify-end">
				<h2 class="md:absolute top-0 left-0 xl:text-[3.125rem] md:text-[2.75rem] 
				text-[2rem] tracking-[0.0125em] leading-[1.2] font-bold">
					<?= $args['titolo'] ?>
				</h2>
				<?= svg('mark','md:mt-[4rem] hidden md:block md:static absolute md:w-auto w-[18rem] z-[-1] top-0 right-0') ?>
			</div>
			<div class="2xl:col-span-7 md:col-span-6 lg:pl-[3rem]">
				<?= $args['text'] ?>
				<?php button($args['link'],'btn md:mt-[2rem] mt-[1.5rem]') ?>
			</div>
		</div>
	</div>
</section>
