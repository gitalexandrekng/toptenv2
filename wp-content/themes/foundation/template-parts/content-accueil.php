<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry small-3 columns end'); ?>>
	<div class="accueil-box">
        <div class="blue-line"></div>

        <?php

        $thumb_id = get_post_thumbnail_id();

        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

        ?>
        <div class="thumbnailz" style="background-image:url(<? echo $thumb_url[0]; ?>)">
        </div>
        <div class="content">
            <header>
        		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        	</header>
        	<div class="entry-content">
        		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
        	</div>
        	<!--<footer>
        		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
        	</footer>-->
        </div>
        <div class="crayon"><div class="flex"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/crayon.png" alt=""></div></div>
        <div class="auteur"><div class="flex"><?php foundationpress_entry_meta(); ?></div></div>
        <a class="croix" href="<?php the_permalink(); ?>"><div class="flex">+</div></a>
	</div>
</div>
