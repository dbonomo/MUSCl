<?php
  // Shortcode
  function contact_shortcode() {
	  return '800-270-2579';
  }
  add_shortcode( 'phone-number', 'contact_shortcode' );
  // Clean Head
  remove_action( 'wp_head', 'wlwmanifest_link');
  remove_action ('wp_head', 'rsd_link');
  remove_action( 'wp_head', 'wp_shortlink_wp_head');
  // Remove Emojis
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  
  
  // HTML5 Blank navigation
function header_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => 'header-menu',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s <li class="tel hidden-sm hidden-xs"><a href="tel:800-270-2579" class="tel-link"><span class="glyphicon glyphicon-earphone"></span> 800-270-2579 </a></li></ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
  
	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function arphabet_widgets_init() {

		register_sidebar( array(
			'name'          => 'Footer 1',
			'id'            => 'footer-1',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer-title">',
			'after_title'   => '</h4>',
		) );
		
		register_sidebar( array(
			'name'          => 'Footer 2',
			'id'            => 'footer-2',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer-title">',
			'after_title'   => '</h4>',
		) );
		
		register_sidebar( array(
			'name'          => 'Footer 3',
			'id'            => 'footer-3',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer-title">',
			'after_title'   => '</h4>',
		) );

	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );
	
?>
