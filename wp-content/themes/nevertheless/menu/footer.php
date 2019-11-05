<nav role="navigation" class="menu" id="menu-footer">

	<div class="menu-container">

		<?php
		/* Display menu only if the location is registered */
		if ( tamatebako_is_menu_registered( 'footer' ) ){
			$copy = tamatebako_menu_copyright_item();
			wp_nav_menu(
				array(
					'theme_location'  => 'footer',
					'container'       => '',
					'menu_id'         => 'menu-footer-items',
					'menu_class'      => 'menu-items',
					'depth'           => 1,
					'fallback_cb'     => 'tamatebako_menu_footer_fallback_cb',
					'items_wrap'      => '<div class="wrap"><ul id="%s" class="%s">' . $copy . '%s </ul>"京ICP备19040792号"</div>'
				)
			);
		}
		else{
			tamatebako_menu_footer_fallback_cb();
		}
		?>

	</div><!-- .menu-container -->

  <!-- <div class="powered-by"> 邮箱：1211054926@qq.com</div> -->
  <div class="footer-custom"><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=41148102000200" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="http://www.beian.gov.cn/file/ghs.png" style="float:left;"> 豫公网安备 41148102000200号</a></div> </div>
</nav><!-- #menu-primary -->
