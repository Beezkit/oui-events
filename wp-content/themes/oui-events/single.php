<?php get_header(); ?>

	<div class="container">

		<div class="single-thumbnail">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_post_thumbnail('singleBlog', array('class' => 'img-fluid')); ?>

		<?php endwhile; ?>

		</div>

		<div class="single-title">

		<?php while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>

		<?php endwhile; ?>

			<span class="border-bot"></span>

		</div>

		<div class="single-contain">

		<?php while ( have_posts() ) : the_post(); ?>

			<p class="posted">Publié le <?php the_date('d/m/Y'); ?> par <?php the_author(); ?></p>

			<?php the_content(); ?>

		<?php endwhile; ?>

		</div>

	</div>

<?php get_footer(); ?>
