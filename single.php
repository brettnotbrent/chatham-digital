<?php get_header(); ?>
<?php get_sidebar(); ?>
  <section class="content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1>
      <?php the_title(); ?>
    </h1>
    <h2>
   	  <?php the_date(); ?> by <?php the_author(); ?>  |  Posted in <?php the_category(); ?>
    </h2>
    <p>
  	  <?php the_content(); ?>
    </p>
  </section>
<?php endwhile; else: ?>
<p><?php _e('Arrggg, sorry but we aints got yer posts'); ?></p>
<?php endif; ?>
<div class="clear"></div>