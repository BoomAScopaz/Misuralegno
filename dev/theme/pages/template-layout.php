<?php 
	// Template Name: Custom Layout Page
?>

<?php get_header(); ?>
 
<main>
	<div class="container">
		<h1 class="mb-6"><?= the_title() ?></h1>
		<?php the_content()?>
	</div>
</main>

<?php get_footer(); ?>