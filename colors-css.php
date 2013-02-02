<?php
header("Content-type: text/css");

//define the variables
$light_color = "#dbc788";
$dark_color = "#623319";
$title1 = $light_color;
$title2 = "#c0c0c0";  //Silver
$menu_dark_hover = "#2d2d2d"; //#373737 original
$background_image = "images/2013/radial.png";
$background_topdown = "images/2013/dl_topdown_gradient.png";
$h2_image = "images/2013/ld_gradient.png";


echo <<<CSS
/* --- start of css --- */

#smooth, .header_logo:after { color: $title1; }
#ps, #jazz, #fest, #site-description { color: $title2; }
#festival, #canyons, #year { color: $title1; }
#inthe { color: $dark_color; }
#access a, a, #jazz_contact a { color: $title2; }
#access li:hover > a, #access a:focus, #jazz_contact a:hover { color: $menu_dark_hover; }
#tag1, #tag1 a { color: $light_color; }
#tag2, #city { color: $title2; }

/* --- CSS Gradient Tricks --- */
/* --- http://css-tricks.com/examples/CSS3Gradient/ --- */

/* Centered, full size */
#radial-center {
  /* fallback */
  background-color: $light_color;
  background-image: url($background_image);
  background-position: center center;
  background-repeat: repeat-y;

  /* Safari 4-5, Chrome 1-9 */
  /* Can't specify a percentage size? Laaaaaame. */
  background: -webkit-gradient(radial, center center, 0, center center, 460, from($light_color), to($dark_color));
  
  /* Safari 5.1+, Chrome 10+ */
  background: -webkit-radial-gradient(circle, $light_color, $dark_color);
  
  /* Firefox 3.6+ */ 
  background: -moz-radial-gradient(circle, $light_color, $dark_color);
  
  /* IE 10 */ 
  background: -ms-radial-gradient(circle, $light_color, $dark_color);
  
  /* Opera cannot do radial gradients yet */
}

/* Gradient top -> bottom */
#linearBg2, body {
  /* fallback */
  background-color: $light_color;
  background: url($background_topdown);
  background-repeat: repeat-x;
  
  /* Safari 4-5, Chrome 1-9 */
  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from($light_color), to($dark_color));
  
  /* Safari 5.1, Chrome 10+ */
  background: -webkit-linear-gradient(top, $dark_color, $light_color);
  
  /* Firefox 3.6+ */
  background: -moz-linear-gradient(top, $dark_color, $light_color);
  
  /* IE 10 */
  background: -ms-linear-gradient(top, $dark_color, $light_color);
  
  /* Opera 11.10+ */
  background: -o-linear-gradient(top, $dark_color, $light_color);
}

/* Linear Gradient Left -> Right */
#linearBg1, .entry-content h2 {
  /* fallback */
  background-color: $light_color;
  background-image: url($h2_image);
  background-repeat: repeat-y;

  /* Safari 4-5, Chrome 1-9 */
  background: -webkit-gradient(linear, left top, right top, from($light_color), to($dark_color));
  
  /* Safari 5.1, Chrome 10+ */
  background: -webkit-linear-gradient(left, $light_color, $dark_color);
  
  /* Firefox 3.6+ */
  background: -moz-linear-gradient(left, $light_color, $dark_color);
  
  /* IE 10 */
  background: -ms-linear-gradient(left, $light_color, $dark_color);
  
  /* Opera 11.10+ */
  background: -o-linear-gradient(left, $light_color, $dark_color);
}

/* Linear Gradient with specified stops */
#arbitrary-stops {
  /* fallback DIY*/
  background-color: $light_color;
  background: url($background_image);
  background-repeat: repeat-x;

  /* Safari 4-5, Chrome 1-9 */
  background: -webkit-gradient(linear, left top, right top, from($dark_color), color-stop(0.05, $light_color), color-stop(0.5, $dark_color), color-stop(0.95, $light_color), to($dark_color));
  
  /* Safari 5.1+, Chrome 10+ */
  background: -webkit-linear-gradient(left, $dark_color, $light_color 5%, $dark_color, $light_color 95%, $dark_color);
  
  /* Firefox 3.6+ */
  background: -moz-linear-gradient(left, $dark_color, $light_color 5%, $dark_color, $light_color 95%, $dark_color);
  
  /* IE 10 */
  background: -ms-linear-gradient(left, $dark_color, $light_color 5%, $dark_color, $light_color 95%, $dark_color);
  
  /* Opera 11.10+ */
  background: -o-linear-gradient(left, $dark_color, $light_color7 5%, $dark_color, $light_color 95%, $dark_color);
}
/* --- end of css --- */

CSS;
