<section class="about_block bg-dark lg:py-[8rem] py-[5rem] appear-up">
	<div class="container">
		<div class="text-center mx-auto lg:max-w-[75%] lg:text-[3rem] text-[2rem] leading-[1.2] font-bold anim-el">
			<?= $args['title'] ?>
		</div>
		<?php if ($args['gallery']): ?>
			<div class="grid md:grid-cols-3 grid-cols-2 xl:gap-[4rem] md:gap-5 gap-[3px]  lg:my-[6rem] my-[2rem] anim-el">
				<?php foreach ($args['gallery'] as $key => $img): ?>

					<?= attach($img,$key == 2 ? 'col-span-2 md:col-span-1 md:aspect-[1] aspect-[2/1]' : 'col-span-1'  )  ?>
				<?php endforeach ?>
			</div>
		<?php endif ?>
		<div class="md:text-center mx-auto lg:max-w-[75%] anim-el ">
			<?= $args['text'] ?>
		</div>
	</div>
</section>

