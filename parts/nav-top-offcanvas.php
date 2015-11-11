<div class="sticky show-for-medium-up contain-to-grid nav-top-c">



<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="logo">
      <a href="<?php echo home_url();?>"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logo.png"></a>
    </li>
  </ul><!-- end of title-area -->

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right top-bar-nav-right">
       <li><a class="top-bar-section-a" href="<?php echo home_url();?>/what-is-hae/">HAEとは</a></li>

       <li class="has-dropdown">
        <a href="#">Organization</a>
        <ul class="dropdown">
          <li><a href="<?php echo home_url();?>/who-is-haej/">HAEJについて</a></li>
          <li><a href="<?php echo home_url();?>/meet-the-team/">メンバーについて</a></li>
					<li><a href="<?php echo home_url();?>/contact-haej">コンタクト</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <a href="#">News&Events</a>
        <ul class="dropdown">
          <li><a href="<?php echo home_url();?>/category/news/">ニュース</a></li>
          <li><a href="<?php echo home_url();?>/category/events/">イベント</a></li>
					<li><a href="<?php echo home_url();?>/category/newsletters">ニュースレター</a></li>
        </ul>
      </li>
       <li class="has-dropdown">
        <a href="#">治療と支援</a>
        <ul class="dropdown">
          <li><a href="<?php echo home_url();?>/diagnosis">診断</a></li>
          <li><a href="<?php echo home_url();?>/hae-treatment/">HAEの治療</a></li>
					<li><a href="<?php echo home_url();?>/patient-stories/">患者家族のストーリー</a></li>
					<li><a href="<?php echo home_url();?>/documents/">documents</a></li>
        </ul>
      </li>


    </ul><!-- end of Right Nav Section -->
  </section>
</nav>

</div>




<div class="show-for-small-only">
	<nav class="tab-bar">
		<section class="middle tab-bar-section">
			<a href="<?php get_site_url(); ?>" title="<?php bloginfo('name'); ?>">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</a>
		</section>
		<section class="left-small">
			<a href="#" class="left-off-canvas-toggle menu-icon" ><span></span></a>
		</section>
	</nav>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only">
	<?php joints_off_canvas(); ?>    
</aside>
			
<a class="exit-off-canvas"></a>














