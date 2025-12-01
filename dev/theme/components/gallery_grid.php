<?php 
	$count = count($args['gallery']);
	$images = array_map( fn ($i) => img_data($i), $args['gallery']);
	$json = htmlspecialchars(json_encode($images));
?>


<section x-data="gridgal(<?= $count ?>, <?= $json ?>)" class="gallery_grid bg-white sm:pt-[5rem] pt-5">
	<div class="container">

		<?php if (!empty($args['gallery'])): ?>
			<div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 xl:gap-6 sm:gap-4 gap-5 appear-up">
				<template x-for="(el, ind) in images.slice(0, pag)" :key="ind">
					<img :src="el.src" alt="" class="anim-el">
				</template>
			</div>
		<?php endif ?>

		<div x-show="pag < images.length" class="flex justify-center mt-[4rem]">
			<button 
		        @click="showMore"
		        class="btn">
		        <span>Carica altro</span>
		    </button>
		</div>
	</div>
</section>