<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
			</div>
		</section>

		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<div class="footer-contain">
            <div class="hero">
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/supergirl.png" alt="">
                <div class="bouton">
                    <a href="#" class="join">Rejoignez-nous</a>
                </div>
            </div>
		    <div class="fond"></div>
		</div>

        <div class="footer-go">
            <div class="contain">
                <ul>
                    <li>Accès scan en preview</li>
                    <li>Réservation d'issues en ligne</li>
                    <li>Gestion de vos collections</li>
                    <li>Système d'alerte numéro</li>
                </ul>
            </div>
        </div>

        <div class="footer-tqt">
            <div class="contain">
                <div class="row">
                    <div class="large-6 columns">
                        <div class="row">
                            <div class="large-4 columns">
                                <ul>
                                    <li>Actualités</li>
                                    <li>Comics</li>
                                    <li>Previews</li>
                                    <li>Promotions</li>
                                    <li>Mes collections</li>
                                    <li>Forum</li>
                                </ul>
                            </div>
                            <div class="large-4 columns">
                                <ul>
                                    <li>Mon compte</li>
                                    <li>Mes infos</li>
                                    <li>Mes références</li>
                                    <li>Ma liste d'envies</li>
                                    <li>Mes favoris</li>
                                    <li>Deconnexion</li>
                                </ul>
                            </div>
                            <div class="large-4 columns">
                                <ul>
                                    <li>Nous situer</li>
                                    <li>Nous contacter</li>
                                    <li>Mentions légales</li>
                                    <li>CGV</li>
                                    <li>www.toptencomics.fr</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 columns">
                        <div>S'abonner à la newsletter</div>
                        <div class="row">
                            <div class="small-8 columns">
                                <input class="botz" type="text" placeholder="saisir votre adresse mail...">
                            </div>
                            <div class="small-4 columns">
                                <input class="botz-submit" type="submit">
                            </div>
                        </div>
                        <div class="socialmedia">
                            <ul>
                                <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/social/fb.jpg" alt=""></li>
                                <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/social/tw.jpg" alt=""></li>
                                <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/social/pint.jpg" alt=""></li>
                                <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/social/insta.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-last">
            <div class="contain">
                <div class="copyright">Copyright © 2016 TOPTENCOMICS, All Rights Reserved. Made with <span style="color:#ed1a1a">♥</span> by Alpha Web Agency <br></div>
                <a href="#" class="mentions">MENTIONS LÉGALES</a>
            </div>
        </div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script>
var owl = $('#slide-top');
    owl.owlCarousel({
        items:6,
        loop:true,
        margin:0,
        autoplay:true,
        autoplaySpeed: 1500,
        autoplayTimeout: 500,
        autoplayHoverPause:true,
        lazyLoad:true,
    });

    var owl = $('#slide-center');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:0,
            autoplay:false,
            autoplaySpeed: 1500,
            autoplayTimeout: 2500,
            autoplayHoverPause:true,
            lazyLoad:true,
			URLhashListener:true,
        });
</script>
</body>
</html>
