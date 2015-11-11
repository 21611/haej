<?php
/*
Template Name: contanct
*/
?>
<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">          
 
            
    <section class="entry-content" itemprop="articleBody">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
      <?php the_content('<button class="tiny">Read more...</button>'); ?>
    </section> <!-- end article section -->
              
     
  </article> <!-- end article -->

<?php endwhile; ?>  
          

<?php else : ?>
  <?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>








<?php get_footer(); ?>




