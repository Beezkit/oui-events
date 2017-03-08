<?php
/**
 * Template Name: Contact
 *
 */
?>

<?php get_header(); ?>

	<div class="container">

		<div id="contact">
	        <h2>Contactez-nous</h2>
	        <span class="border-title"></span>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<div class="clearfix"></div>

			<?php endwhile; ?>

		</div>

    </div>

<?php get_footer(); ?>
