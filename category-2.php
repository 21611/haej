
<?php get_header(); ?>

<div class="container-top-two g-all-c">
  <div class="ll-2c">
    <div class="lc-1">
      <div class="box">


<!-- ニュース一覧 -->
  <div class="" id="news">
<!-- ここからループ-->


<?php query_posts( $query_string . '&cat=2&paged='.$paged); ?>
<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

    <dl class="dl-horizontal">
      <dt><?php echo get_the_date('Y/m/d'); ?></dt>
      <dd>
      <?php the_content();?>

        
      </dd>
    </dl>
<!-- ここまでループ-->


<?php endwhile; endif; wp_reset_query(); ?>
 </div>





      </div>
    </div>
    <div class="lc-2">
      <div class="box">
        <div class="test-box"></div>
      </div>
    </div>
  </div>
</div>








<?php get_footer(); ?>





