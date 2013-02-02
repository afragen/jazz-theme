<?php


add_filter( 'bloginfo', 'location_tagline', 10, 2 );
function location_tagline( $text, $show ) {
    if( 'description' == $show ) {
        $text = '<span id="tag2">Saturday, May 19, 2012</span> <span id="tag1"><a href="http://www.indiancanyonsgolf.com" target="_blank" title="Click for directions">Indian Canyons Golf Resort</a></span>';
    }
    return $text;
}

//add_filter( 'bloginfo', 'pssjf_name', 10, 2 );
function pssjf_name( $text, $show ) {
	if( 'name' == $show ) {
		$text = '<span id="ps">Palm Springs</span><span id="smooth">Smooth</span><span id="fest">Festival XVII</span><span id="jazz">Jazz</span>';
	}
	return $text;
}

add_filter( 'bloginfo', 'finc_name', 10, 2 );
function finc_name( $text, $show ) {
	if( 'name' == $show ) {
		$text = '<span id="name1">Festival</span><span id="name3">in the</span><span id="name3">Canyons</span><span id="year">XVIII</span>';
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

 