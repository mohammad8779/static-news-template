    <div class="maincontent_bottom">
		    <img src="<?php echo get_template_directory_uri(); ?>/img/bottom_promo.png" alt="" />
		</div>
	    <div class="footer">
		    <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'footermenu') ); ?>
		   <p class="copyright_text">copyright &copy;2011 The News Reporter Inc. All rights reserved. Theme designed by GraphicsFuel.com <br />
			   Reproduction in whole or in part in any form or medium without express written permission of The News Reporter Inc. 
			   is prohibited. The trade marks and images used in the design are the copyright of their respective owners. They are used only for display purpose.</p>
		</div>
	</div>
 </div> 
 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
			jQuery(window).load(function() {
				jQuery('#slider').nivoSlider({
					controlNav: false
				});
		   });
    </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ticker.js" type="text/javascript"></script>	
      <script type="text/javascript">
			jQuery(function () {
				jQuery('#js-news').ticker();
			});
       </script>
	   
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fs.naver.min.js"></script>
       		<script type="text/javascript">
					jQuery("nav").naver({
						animated: true
					});		
		    </script>
	   
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<?php wp_footer()?>
</body>
</html>