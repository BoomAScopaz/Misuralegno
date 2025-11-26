
<?php get_header(); ?>
	<main>
		<?php if ( isset($fields['layouts']) ): 

			$layoutName = []; 
			foreach ($fields['layouts'] as $ind => $layout) {
				array_push($layoutName, $layout['acf_fc_layout']);
			}

			if(!in_array('hero_home', $layoutName)){ 
				component('hero_page'); 
			} 

			foreach ($fields['layouts'] as $ind => $layout) {
				component($layout['acf_fc_layout'], $layout); 
			}

		endif ?>
	</main>
<?php get_footer(); ?>

