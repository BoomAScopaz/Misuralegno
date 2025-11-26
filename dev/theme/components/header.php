<header x-data="{openMenu: false}" :class="openMenu ? 'open-menu' : ''">
	<div class="container flex justify-between items-center">
		<a href="<?= home_url() ?>">
			<?= svg('logo', 'xl:w-auto lg:w-[200px] w-[180px] h-auto ') ?>
		</a>

		<?php 
			wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'menu_class' => 'main-menu',
			));
		?>

		<button @click="openMenu = !openMenu; console.log('click')" class="block lg:hidden">
			<?= svg('hamburger', 'h-auto w-[1.75rem]') ?>
		</button>
	</div>
</header>