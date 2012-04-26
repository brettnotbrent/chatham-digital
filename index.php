<?php get_header(); ?>
<?php get_sidebar(); ?>

<section class="content">
  <ul class="post-list">
    <?php
    $args = array( 'numberposts' => 15);
    $theposts = get_posts( $args );
    foreach($theposts as $post) : setup_postdata($post); ?>
 	<a href="<?php the_permalink(); ?>" title="Click to view this post">
 	<li class="post">
      <h1>
        <a href="<?php the_permalink(); ?>" title="Click to view this post">
          <?php the_title(); ?>
        </a>
      </h1>
 	  <h2>
 	  	<?php the_date(); ?> by <?php the_author(); ?>  |  Posted in <?php the_category(); ?>
 	  </h2>
      <p>
        <?php echo substr(get_the_excerpt(), 0, 500); ?>
        <a href="<?php the_permalink(); ?>" title="Click to view this post">
          Read More &rarr;
        </a>
      </p>
    </li><!--end "post"-->
   
    <?php endforeach; ?>
  </ul>
</section>
<div class="clear"></clear>

<?php get_footer(); ?>