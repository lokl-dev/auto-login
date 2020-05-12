<?php
/*
Plugin Name: Auto Login
Plugin URI: https://github.com/lokl-dev/auto-login
Description: Auto login admin user for local dev sites
Version: 0.1
Author: Leon Stafford
Author URI: https://ljs.dev
License: The Unlicense
*/

add_action( 'init', 'loklautologin' );

function loklautologin() {
    wp_set_auth_cookie( 1 );
}
