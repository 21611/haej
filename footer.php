
<!--social media-->
<div class="socialmedia-container">
<div class="row">
  <div class="small-3 medium-2 small-centered columns socialmedia-title">
    <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/socialmedia.png" alt="">
  </div>
  <div class="row">
   <div class="small-6 small-centered columns socialmedia-icons">
   <a href="https://www.facebook.com/HAEJ--715385295244492/timeline/" class="facebook-link ir">facebook</a>
   <a href="https://twitter.com/HAEJ_info" class="twitter-link ir">twitter</a>
  </div>
   
  </div>
</div>
  </div>


<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="container-form">
<div class="small-3 medium-2 small-centered columns newsletter-title">
 <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/newsletter.png" alt="">
  </div>
<form action="//haej.us11.list-manage.com/subscribe/post?u=a5c26df19ee004d331bb2248b&amp;id=84850c1494" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate ac-custom ac-radio ac-fill" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<div class="mc-field-group row">
		<div class="medium-6 columns medium-centered">
			<label for="mce-NAME" class="no-animated">お名前 </label>
			<input type="text" value="" name="NAME" class="required" id="mce-NAME">
		</div>
	</div>
	<div class="mc-field-group row">
		<div class="medium-6 columns medium-centered">
			<label for="mce-EMAIL" class="no-animated">メールアドレス </label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
	</div>
	<div class="mc-field-group row">
		<div class="medium-6 columns medium-centered">
			<label for="mce-ADDRESS" class="no-animated">お住まい </label>
			<input type="text" value="" name="ADDRESS" class="" id="mce-ADDRESS">
		</div>
	</div>
	<div class="mc-field-group input-group">
		<div class="row">
			<div class="medium-6 columns medium-centered form-subtitle">
    		<strong>HAEとの関係</strong>
  		</div>
  	</div>
  <div class="row">
		<div class="medium-6 columns medium-centered">
    <ul>
    	<li>
    		<input type="radio" value="ご本人がHAE患者" name="RELATION" id="mce-RELATION-0">
    		<label for="mce-RELATION-0">ご本人がHAE患者</label>
    	</li>
    	<li>
				<input type="radio" value="患者家族" name="RELATION" id="mce-RELATION-1">
				<label for="mce-RELATION-1">患者家族</label>
			</li>
			<li>
			 <input type="radio" value="医師など医療関係者" name="RELATION" id="mce-RELATION-2">
				<label for="mce-RELATION-2">医師など医療関係者</label>
			</li>
			<li>
			 <input type="radio" value="それ以外" name="RELATION" id="mce-RELATION-3">
				<label for="mce-RELATION-3">それ以外</label>
			</li>
		</ul>
	</div>
	</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a5c26df19ee004d331bb2248b_84850c1494" tabindex="-1" value="">
    </div>
    <div class="clear row container-submitt">
			<div class="medium-3 columns medium-centered">
    		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
    	</div>
    </div>
  </div>
  </div>
</form>
</div>

<!--End mc_embed_signup-->








					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.HAEJ</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
		<?php wp_footer(); ?>
     <script type="text/javascript" charset="utf-8">
    function checkScroll(){
    var startY = $('.nav-top-c').height() * 2; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.nav-top-c').addClass("scrolled");
    }else{
        $('.nav-top-c').removeClass("scrolled");
    }
}

if($('.nav-top-c').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}
</script>
	</body>
</html> <!-- end page -->