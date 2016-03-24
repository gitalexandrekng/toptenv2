<?php
/*
Template Name: comics
*/

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
       <div class="entry-content">
           <?php the_content(); ?>

           <?php
           if(isset($_POST['search']))
           {
             ?>
             <div id="jecentre">
               <h1>TOP TEN COMICS</h1>
               <div id="results">Résultat pour <span style="color:red;text-transform:uppercase"><?php echo $_POST['search'] ?></span><br>
               <a href="">Faire une autre recherche</a>
               </div>
             </div>
             <?php
             include('api/examples/series-load.php');
           }

           else
           {
             ?>
             <div id="centered">
               <h1>Rechercher un comic</h1>
               <h2>Team Alpha</h2>
               <form method="post">
                 <p>
                 <input type="text" name="search"/><br>
                 <input type="submit" value="Valider"/>
                 </p>
               </form>
               <?php include('api/examples/tqt.php'); ?>
             </div>
             <?php
           }
           ?>

       </div>
       <footer>
           <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
           <p><?php the_tags(); ?></p>
       </footer>
       <?php do_action( 'foundationpress_page_before_comments' ); ?>
       <?php comments_template(); ?>
       <?php do_action( 'foundationpress_page_after_comments' ); ?>
   </article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer();
