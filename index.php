<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:       Easy & Fast Optimization
 * Description:       Optimize your website with one click easy and fast!
 * Version:           1.5.0
 * Author:            Md Rashed Hossain, Shails
 * Author URI:        https://wprashed.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       easy-fast-optimization
 * Domain Path:       /languages
 */
if ( !function_exists( 'add_action' ) ) {
    echo 'Code is poetry.';
    exit;
}

//Plugin DIR URL
define( 'easy_fast_optimization_URL', plugin_dir_url( __FILE__ ) );
//Plugin DIR Path
define( 'easy_fast_optimization_DIR', plugin_dir_path( __FILE__ ) );

//Admin Styles
add_action( 'admin_init', 'easy_fast_optimization_echo_css' );

function easy_fast_optimization_echo_css() {
	//Add CSS Style for Admin Panel
   wp_enqueue_style( 'easy-fast-optimization-style', easy_fast_optimization_URL."admin/assets/css/style.min.css",array(), "1.0.0" );
}

/*
* Load Admin Settings
*/
include easy_fast_optimization_DIR ."admin/index.php";

/*
* Load Functions
*/
include easy_fast_optimization_DIR ."functions/easy-fast-optimization-functions.php";

/**
 * Load plugin textdomain
 *
 * @since 1.0.0
 */
function easy_fast_optimization_language() {
  load_plugin_textdomain( 'easy-fast-optimization-lang', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}

//Load Plugin Functions
add_action( 'plugins_loaded', 'easy_fast_optimization_language' );

/*
* Default Options for Plugin
*/

function easy_fast_optimization_activation() {

	add_option("easy_fast_optimization_check_enable","0");
	add_option("easy_fast_optimization_adv_enable","0");
	add_option("easy_fast_optimization_html_enable","0");
	add_option("easy_fast_optimization_comm_enable","0");
	add_option("easy_fast_optimization_emoj_enable","0");
	add_option("easy_fast_optimization_migr_enable","0");
	add_option("easy_fast_optimization_shor_enable","0");
	add_option("easy_fast_optimization_quer_enable","0");
	add_option("easy_fast_optimization_foot_enable","0");
	add_option("easy_fast_optimization_async_enable","0");
	add_option("easy_fast_optimization_lazy_enable","0");
	add_option("easy_fast_optimization_cach_enable","0");
	add_option("easy_fast_optimization_embd_enable","0");
	add_option("easy_fast_optimization_admn_enable","0");
	
}


//Register Options
register_activation_hook( __FILE__, 'easy_fast_optimization_activation' );

// Plugin WP-Admin Settings Text
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'easy_fast_optimization_plugin_page');

function easy_fast_optimization_plugin_page( $links ) {
    $links[] = '<a href="' . admin_url( 'options-general.php?page=easy_fast_optimization_options' ) . '">' . __('Settings') . '</a>';
    return $links;
}