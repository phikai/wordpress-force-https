<?php

/*
Plugin Name: WordPress Force HTTPS
Plugin URI: https://github.com/phikai/wordpress-force-https
Description: Forces all of the things to HTTPS
Author: A. Kai Armstrong
Author URI: http://www.kaiarmstrong.com
Version: 0.1.3
*/

function toz_force_https () {
  if ( !is_ssl() ) {
    wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
    exit();
  }
}
add_action ( 'template_redirect', 'toz_force_https', 1 );
