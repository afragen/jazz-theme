<?php

//add_action('wp_footer', 'sts_address');
function sts_address() {
  //$content = '<span id="sts-address">455 S. Compadre Road, Palm Springs, CA 92262<br />Phone: 760-327-4919 &bull; Fax: 760-327-4429</span>';
  //echo $content;
}

add_filter( 'bloginfo', 'my_tagline', 10, 2 );
add_filter( 'bloginfo', 'my_name', 10, 2 );
function my_tagline( $text, $show ) {
    if( 'description' == $show ) {
        $text = '<span id="tag2">Saturday, May 19, 2012</span> <span id="tag1"><a href="http://www.indiancanyonsgolf.com" target="_blank" title="Click for directions">Indian Canyons Golf Resort</a></span>';
    }
    return $text;
} 

function my_name( $text, $show ) {
	if( 'name' == $show ) {
		$text = '<span id="ps">Palm Springs</span><span id="smooth">Smooth</span><span id="fest">Festival XVII</span><span id="jazz">Jazz</span>';
	}
	return $text;
}

add_action('wp_footer', 'jazz_contact');
function jazz_contact() {
  $content = "";
  if ( ! is_page('contact-us') ) {
    $content = '<div id="jazz_contact"><a href="./contact-us">contact us</a></div>';
  }
  echo $content;
}


// function dmm_nav_menu() { 
//   if ( function_exists( 'wp_nav_menu' ) )
//     if ( is_home() || is_front_page() ) {
//       wp_nav_menu( array( 
//         'menu_class' => 'nav-menu', 
//         'theme_location' => 'top-menu', 
//         'fallback_cb' => ''
//          ) );
//     } else {
//       wp_nav_menu( array( 
//         'menu_class' => 'nav-menu', 
//         'theme_location' => 'secondary-menu', 
//         'fallback_cb' => '' 
//         ) );
//     }
//   else
//     wp_list_pages();
// }
// 
// add_action( 'init', 'register_dmm_menu' );
// function register_dmm_menu() {
//   register_nav_menus(
//     array(
//       'top-menu' => __( 'Top Menu' ),
//       'secondary-menu' => __( 'Secondary Menu' )
//     )
//   );
// }

 ?>