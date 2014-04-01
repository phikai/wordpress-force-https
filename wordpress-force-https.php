<?php

/*
 * Plugin Name: WordPress Force HTTPS
 * Plugin URI: http://pressable.com
 * Description: Forces all of the things to HTTPS
 * Author: A. Kai Armstrong <code@pressable.com>
 * Author URI: http://www.kaiarmstrong.com
 * Version: 0.1
 * */

#http://yoast.com/wordpress-ssl-setup/
function pr_force_https () {
  if ( !is_ssl() ) {
    wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
  }
}
add_action ( 'template_redirect', 'pr_force_https', 1 );
