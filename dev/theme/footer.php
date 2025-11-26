
		<footer class="bg-white ">
			<div class="container text-center flex flex-col items-center">
				<div class="lg:my-[6rem] my-[2rem] w-fit">
					<?= svg('logo','fill-dark ') ?>
				</div>
					
				<div class="flex md:flex-row flex-col border font-bold text-[1.125rem]">
					<a href="mailto:info@misuralegno" class="px-[1.875rem] py-[1.2rem] flex justify-center items-center gap-4">
						<?= svg('email') ?>
						info@misuralegno
					</a>
					<div class="md:border-l border-b border-dark"></div>
					<a href="tel:043471143" class="px-[1.875rem] py-[1.2rem] flex justify-center items-center gap-4">
						<?= svg('phone') ?>
						+39 0434 71143
					</a>
				</div>

				<div class="lg:mb-[6rem] mb-[2rem] mt-[2.5rem]">
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'menu_class' => 'flex flex-wrap justify-center uppercase font-bold text-[0.875rem] md:gap-5 gap-3 px-6',
						));
					?>
				</div>

				<div class="text-[.8rem] mb-10 px-4">
					MISURALEGNO S.R.L.   |   Via Geromina - Zona artigianale, 3 - 33077 Sacile (Pn) Tel +39 043471143 - info@misuralegno.it - P.I. TV 02202920266   |   privacy policy - cookie policy
				</div>
				
			</div>
		</footer>
		<?php wp_footer() ?>
	</body>
</html>


