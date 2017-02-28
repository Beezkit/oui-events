<?php get_header(); ?>

    <?php query_posts( array ( 'pagename' => 'accueil', 'order' => 'ASC' ) ); ?>
    <div class="img-accueil">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) { ?>
            <div class="thumb" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                <?php the_content(); ?>
            </div>
            <?php } ?>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_query(); ?>
<?php get_footer(); ?>

<div class="container">
    <div id="presentation">
        <?php query_posts( array ( 'post_type' => 'presentation', 'order' => 'ASC', 'posts_per_page' => '1'  ) ); ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article>
                    <h2><?php the_title(); ?></h2>
                    <span class="border-title"></span>
                    <?php the_content();?>
                </article>


            <?php endwhile; ?>

        <?php wp_reset_query(); ?>
    </div>
    <div id="prestation">
        <?php query_posts( array ( 'post_type' => 'prestation', 'order' => 'ASC', 'posts_per_page' => '9'  ) ); ?>
        <h2>Prestations :</h2>
        <span class="border-title"></span>
            <?php while ( have_posts() ) : the_post(); ?>

                <article class="col-md-4">
                    <?php the_post_thumbnail('article', array('class' => 'img-fluid'));?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt();?>
                </article>


            <?php endwhile; ?>

        <?php wp_reset_query(); ?>
    </div>
</div>
