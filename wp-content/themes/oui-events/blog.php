<?php
/**
 * Template Name: Blog
 *
 */
?>

<?php get_header(); ?>

<div id="liste-blog" class="container">

	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

	<?php query_posts( array ( 'post_type' => 'post', 'orderby' => 'date', 'posts_per_page' => 10, 'paged' => $paged ) ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>">

			<div class="row contain-blog">

				<div class="col-md-6 contain-blog-thumbnail">

					<?php the_post_thumbnail('list-article', array('class' => 'img-fluid')); ?>

				</div>

				<div class="col-md-6 contain-blog-texte">

					<h2><?php the_title(); ?></h2>

					<p class="posted">Publié le <?php the_date('d/m/Y'); ?> par <?php the_author(); ?></p>

					<?php the_excerpt(); ?>

					<span class="read-more btn">Lire la suite <i class="fa fa-plus"></i></span>

				</div>

			</div>

        </a>

		<?php endwhile; ?>
		<div class="clearfix"></div>
</div>

<?php get_footer(); ?>
