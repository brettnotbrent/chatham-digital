<?php get_header(); ?>
<?php get_sidebar(); ?>

  <section class="content">
    <p>
	  <?php echo category_description(  ); ?>
	</p>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li class="post">
      <h1>
        <a href="<?php the_permalink(); ?>" title="Click to view this post">
            <?php the_title(); ?>
        </a>
      </h1>
      <h2>
 	  	<?php the_date(); ?> by <?php the_author(); ?>
 	  </h2>
      <p>
        <?php echo substr(get_the_excerpt(), 0, 500); ?>
        <a href="<?php the_permalink(); ?>" title="Click to view this post">
          Read More &rarr;
        </a>
      </p>
    </li><!--end "post"-->
  <?php endwhile; else: ?>
  <p><?php _e('Arrggg, sorry but we aints got yer posts'); ?></p>
  <?php endif; ?>
  </section>

  <div class="clear"></div>