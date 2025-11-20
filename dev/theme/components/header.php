<header class="py-3">
	<div class="container flex justify-between items-center">
		
		<a href="<?= home_url() ?>">logo</a>
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'menu_class' => 'main-menu flex gap-[1rem]',
			));
		?>
	</div>
</header>