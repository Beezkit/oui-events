<?php wp_footer(); ?>
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="logo-footer col-md-3">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Oui Events! Organisatrice d'événement'" class="img-fluid" />
                    </a>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div>
                <div class="menu-footer col-md-3">
                    <p class="footer-title">Menu</p>
                    <?php wp_nav_menu( array( 'theme_location' => 'Bot' ) ); ?>
                </div>
                <div class="follow col-md-3">
                    <p class="footer-title">Nous suivre</p>
                    <div class="social">
                        <div class="row">
                            <span class="col-md-6 col-xs-6">
        							<a href="<?php the_field('facebook', 33); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
        					</span>
                            <span class="col-md-6 col-xs-6">
        							<a href="<?php the_field('twitter', 33); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        					</span>
                            <span class="col-md-6 col-xs-6">
        							<a href="<?php the_field('google_plus', 33); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        					</span>
                            <span class="col-md-6 col-xs-6">
        							<a href="<?php the_field('instagram', 33); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        					</span>
                        </div>
                    </div>
                </div>
                <div class="contact col-md-3">
                    <p class="footer-title">Contactez-nous</p>
                    <div class="contact-footer">
						<a href="<?php echo home_url('contact'); ?>" class="btn">Contact</a>
					</div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
