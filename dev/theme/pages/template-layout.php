<?php 
	// Template Name: Custom Layout Page
?>

<?php get_header(); ?>
 
<main>
	<div class="container">
		<h1>pagina layout</h1>
		<?php if ( isset($fields['layouts']) ): 
		    foreach ($fields['layouts'] as $ind => $layout) :
		    	$filePath = "components/{$layout['acf_fc_layout']}";
				$fileDir = get_template_directory() . "/{$filePath}.php";
				if ( !file_exists($fileDir) ) {
					createLayoutComponent($layout['acf_fc_layout']);
				} 
				// acf_fc_layout name must be the same of the component file name
				component($layout['acf_fc_layout'], $layout); 
		    endforeach;
		endif ?>
		

	</div>
</main>

<?php get_footer(); ?>