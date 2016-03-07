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
            <div class="contain"></div>
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
</body>
</html>
