<?php
/*
Template Name: top
*/
?>
<?php get_header(); ?>









<!--  news  -->
<div class="top-news-container">
 	<?php $blog_posts = query_posts('category_name=news&showposts=5'); foreach($blog_posts as $post): ?>
    <div class="row small-collapse top-news-contents">
      <div class="columns small-2 small-offset-2"><?php echo get_the_date('Y/m/d'); ?></div>
      <div class="columns small-7 small-pull-1">
        <section class="entry-content news-content" itemprop="articleBody">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </section> <!-- end article section -->
      </div>
    </div><!-- end of news loop-->
  <?php endforeach; ?>
</div><!-- end of news  -->









<?php get_footer(); ?>




