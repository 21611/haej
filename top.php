<?php
/*
Template Name: top
*/
?>
<?php get_header(); ?>

<div class="top-top__container">
	<div class="top-top__text">
		<p>Feel good talking to someone</p>
		<p>わかりあえると、心強い。</p>
	</div>
</div>


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





<div class="top-news-container">
 <?php $blog_posts = query_posts('category_name=news&showposts=5');
  foreach($blog_posts as $post): ?>

  <div class="row small-collapse top-news-contents">
       <div class="columns small-2 small-offset-2"><?php echo get_the_date('Y/m/d'); ?>
       </div>
      <div class="columns small-7 small-pull-1">
     <section class="entry-content news-content" itemprop="articleBody">
     <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
      <?php the_excerpt('<button class="tiny">Read more...</button>'); ?>
    </section> <!-- end article section -->

      
      </div>
    </div>
<!-- ここまでループ-->
   <?php endforeach; ?>
 </div>






<?php get_footer(); ?>




