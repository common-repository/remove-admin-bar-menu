<?php
/**
Plugin Name: Remove Admin Bar Menu
Plugin URI: http://wordpress.opensourcedevelopers.net/downloads/
Description: Easily remove Admin Bar Menu from front End
Author: Shakti Kumar
Version: 1.1
Author URI: http://opensourcedevelopers.net/
 */
function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

?>