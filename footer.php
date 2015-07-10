  <footer>
  	<div class="row" role="navigation">
		<?php wp_nav_menu( array( 
		'theme_location' => 'quick_links', 
		'menu_class' => 'nav-bar', 
		'fallback_cb' => 'foundation_page_menu', 
		'container' => 'nav', 
		'container_id' => 'quicklinks',
		'container_class' => 'three column hide-for-small', 
		'walker' => new foundation_navigation() ) ); ?>
  		
		<?php wp_nav_menu( array( 
		'theme_location' => 'footer_links', 
		'menu_class' => 'inline-list', 
		'fallback_cb' => 'foundation_page_menu', 
		'container' => 'nav', 
		'container_class' => 'seven column', 
		'walker' => new foundation_navigation() ) ); ?>
		
		<nav class="two column iconfont">
			<a href="http://facebook.com/jhuksas" title="Facebook"><i class="fa fa-facebook-official fa-3x" style="margin-right: 10px"></i></a>
			<a href="https://www.youtube.com/user/jhuksas" title="YouTube"><i class="fa fa-youtube-square fa-3x"></i></a>
		</nav>
  	</div>
  	<div class="row" id="copyright" role="content-info">
  		<p>&copy; <?php print date('Y'); ?> Johns Hopkins University, Zanvyl Krieger School of Arts & Sciences, 3400 N. Charles St, Baltimore, MD 21218</p>
  	</div>
		<div class="row">
  		<div class="four columns centered">
				<a href="http://www.jhu.edu"><img src="<?php echo get_template_directory_uri() ?>/assets/images/university.jpg" alt="Johns Hopkins University logo" /></a>
			</div>
		</div>
  </footer>
  
  <?php locate_template('parts-script-initiators.php', true, false); wp_footer();?>
	</body>
</html>