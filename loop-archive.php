<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	



	<div class="row small-collapse">
			 <div class="columns small-2 offset-small-2"><?php echo get_the_date('Y/m/d'); ?>
			 </div>
			<div class="columns small-8">
     <section class="entry-content news-content" itemprop="articleBody">
     <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
			<?php the_excerpt('<button class="tiny">Read more...</button>'); ?>
		</section> <!-- end article section -->

				
			</div>
		</div>
<!-- ここまでループ-->





	</article> <!-- end article -->

<?php endwhile; ?>	
					
<?php joints_page_navi(); ?>

<?php else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>


