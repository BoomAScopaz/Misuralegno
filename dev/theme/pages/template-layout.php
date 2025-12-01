<?php 
	// Template Name: Custom Layout Page
?>

<?php get_header(); ?>
 
<main class="bg-white py-10">
	<div class="container">
		<div class="lg:max-w-[900px] mx-auto">
			<h1 class="mb-6"><?= the_title() ?></h1>
			<?php the_content()?>
		</div>
	</div>
</main>

<?php get_footer(); ?>