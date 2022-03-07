<?php

function custom_menu() {
  register_nav_menus(
    array(
      'custom-menu' => __( 'Custom Menu' )
    )
  );
}
add_action( 'init', 'custom_menu' );

function custom_readmore() {
  return '<p><a class="read_more_button" href="' . get_permalink() . '">Read More</a></p>';
}
add_filter( 'the_content_more_link', 'custom_readmore' );

?>
