<?php
/*
Template Name: top-two
*/
?>

<?php get_header(); ?>


<div class="top-two-container">



<div class="row">
  <div class="medium-8 medium-offset-1 columns">




<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php the_content(); ?>


<?php endwhile; endif; ?>

</div>


  <div class="medium-2 columns">テスト</div>
</div>


</div>
<?php get_footer(); ?>
