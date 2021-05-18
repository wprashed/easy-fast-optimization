<?php
if ( !function_exists( 'add_action' ) ) {
    echo 'Code is poetry.';
    exit;
}

//HTML Page Minifier
if( get_option("easy_fast_optimization_check_enable")  == 1 ) {

if ( get_option("easy_fast_optimization_check_enable")  == 1 && get_option("easy_fast_optimization_adv_enable") == 0 ) {
	update_option("easy_fast_optimization_html_enable","1");
	update_option("easy_fast_optimization_comm_enable","1");
	update_option("easy_fast_optimization_emoj_enable","1");
	update_option("easy_fast_optimization_migr_enable","1");
	update_option("easy_fast_optimization_shor_enable","1");
	update_option("easy_fast_optimization_quer_enable","1");
	update_option("easy_fast_optimization_foot_enable","1");
	update_option("easy_fast_optimization_async_enable","1");
	update_option("easy_fast_optimization_lazy_enable","1");
	update_option("easy_fast_optimization_cach_enable","1");
	update_option("easy_fast_optimization_embd_enable","1");	
	update_option("easy_fast_optimization_admn_enable","1");	
}
	
	
if( get_option("easy_fast_optimization_html_enable")  == 1 ) {
	
	if (!( is_admin() )) {
		function ss_page_minify($buffer){
			$search = array(
				'/[^\S ]+\</s',
				'/(\s)+/s',
				'~<!--//(.*?)-->~s'
			);
			$replace = array(
				'<',
				'\\1',
				''
			);
			$buffer = preg_replace($search, $replace, $buffer);
			return $buffer;
		}
		
		function wpuf_minify_page_func(){
			ob_start('ss_page_minify');
		}

		add_action('init','wpuf_minify_page_func');
	}

}

if( get_option("easy_fast_optimization_comm_enable")  == 1 ) {
	//Disable Comment Cookies
	if( get_option("wpss_disable_comment_cookies") == 1 ) {
		remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );
	}
}
	
if( get_option("easy_fast_optimization_emoj_enable")  == 1 ) {
//Disable Emojis
	function disable_wp_emojicons() {
		
		// Disable Emojis
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

		// Disable Smilies
		add_filter( 'option_use_smilies', '__return_false' );
		
		//DNS Prefetch
		add_filter( 'emoji_svg_url', '__return_false' );

		//remove TinyMCE emojis
		add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
	}
  
	function disable_emojicons_tinymce( $plugins ) {
	  if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
	  } else {
			return array();
		}
	}
	
	add_action( 'init', 'disable_wp_emojicons' );
}

if( get_option("easy_fast_optimization_migr_enable")  == 1 ) {
//Remove JS Migrate
	function remove_jq_mig($scripts) {
		if(!is_admin()) {
			$scripts->remove( 'jquery');
			$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
		}
	}

	add_filter( 'wp_default_scripts', 'remove_jq_mig' );
}

if( get_option("easy_fast_optimization_shor_enable")  == 1 ) {
//Remove Shortlinks
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}

if( get_option("easy_fast_optimization_quer_enable")  == 1 ) {
//Remove Query Strings
	function remove_query_strings_ver1( $src ){	
		$find_query_and_remove = explode( '?ver', $src );
			return $find_query_and_remove[0];
	}
	
	if ( !is_admin() ) {
		add_filter( 'script_loader_src', 'remove_query_strings_ver1', 15, 1 );
		add_filter( 'style_loader_src', 'remove_query_strings_ver1', 15, 1 );
	}	
	
	function remove_query_strings_ver2( $src ){	
		$find_query_and_remove = explode( '&ver', $src );
			return $find_query_and_remove[0];
	}
	
	if ( !is_admin() ) {
		add_filter( 'script_loader_src', 'remove_query_strings_ver2', 15, 1 );
		add_filter( 'style_loader_src', 'remove_query_strings_ver2', 15, 1 );
	}
}

if( get_option("easy_fast_optimization_foot_enable")  == 1 ) {
//Scripts to Footer
	function wpuf_headtofooter_func() {
		
		global $wp_scripts;
		if ( isset ( $wp_scripts->registered ) && ! empty ( $wp_scripts->registered ) && is_array( $wp_scripts->registered ) ) {
			foreach ( $wp_scripts->registered as $idx => $script ) {
				if ( isset( $wp_scripts->registered[ $idx ]->extra ) && is_array( $wp_scripts->registered[ $idx ]->extra ) ) {
					
					$wp_scripts->registered[ $idx ]->extra[ 'group' ] = 1;
				}
			}
		}
	}

	add_action('wp_print_scripts', 'wpuf_headtofooter_func', 1000);
}

if( get_option("easy_fast_optimization_async_enable")  == 1 ) {
//ASYNC Tag
	function addAsync($url) {
		if ( FALSE === strpos( $url, '.js' )) {
			return $url;
		}
		
		return "$url' async='"; 
	}

	add_filter( 'clean_url', 'addAsync', 11, 1);
}

if( get_option("easy_fast_optimization_lazy_enable")  == 1 ) {
//Lazy Images

function dataClear($attsData, $attachment){
	$attsData['data-url']=get_the_post_thumbnail_url($attachment->thumbnail, 'medium_large');
	
	return $attsData;
}

function srcClear($attsSrc, $attachment){
	$attsSrc['src']="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
	
	return $attsSrc;
}


function jsClear() {
    wp_enqueue_script( 'easy-fast-optimization-lazy-load', easy_fast_optimization_URL.'admin/assets/js/lazy-load.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'jsClear' );
add_filter('wp_get_attachment_image_attributes', 'dataClear', 10, 2);
add_filter('wp_get_attachment_image_attributes', 'srcClear', 10, 3);

}

if( get_option("easy_fast_optimization_cach_enable")  == 1 ) {
//Browser Caching
function lavaCach() {
	Header("Cache-Control: must-revalidate");
	$offset = 60 * 60 * 24 * 3;
	$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
	Header($ExpStr);
}

add_action('wp_head', 'lavaCach');

}

if( get_option("easy_fast_optimization_embd_enable")  == 1 ) {
//WP Embed
function disableWPEmbed(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'disableWPEmbed' );
}

///admin

if( get_option("easy_fast_optimization_admn_enable")  == 1 ) {

//Disable Post Fields
add_filter( 'posts_fields', 'wp_limit_post_f', 0, 2 );
function wp_limit_post_f( $fields, $query )
{
  if (
        ! is_admin()
        OR ! $query->is_main_query()
        OR ( defined( 'DOING_AJAX' ) AND DOING_AJAX )
        OR ( defined( 'DOING_CRON' ) AND DOING_CRON )
    )
        return $fields;

    $p = $GLOBALS['wpdb']->posts;
    return implode( ",", array(
        "{$p}.ID",
        "{$p}.post_date",
        "{$p}.post_name",
        "{$p}.post_title",
        "{$p}.ping_status",
        "{$p}.post_author",
        "{$p}.post_password",
        "{$p}.comment_status",
    ) );
}

//Optimize Dashboard
add_action( 'wp_dashboard_setup', function()
{
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
} );

//Optimize Heartbeat
function optimize_heartbeat_settings( $settings ) {
    $settings['autostart'] = false;
    $settings['interval'] = 60;
    return $settings;
}
add_filter( 'heartbeat_settings', 'optimize_heartbeat_settings' );

function disable_heartbeat_unless_post_edit_screen() {
    global $pagenow;
    if ( $pagenow != 'post.php' && $pagenow != 'post-new.php' )
        wp_deregister_script('heartbeat');
}
add_action( 'init', 'disable_heartbeat_unless_post_edit_screen', 1 );


// Remove Categories and Tags from Panel
add_action('init', 'myprefix_remove_tax');
function myprefix_remove_tax() {
    register_taxonomy('category', array());
    register_taxonomy('post_tag', array());
}

//Disable Plugin Check
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );

add_filter('site_transient_update_plugins', 'remove_update_notification');
function remove_update_notification($value) {
     unset($value->response[ plugin_basename(__FILE__) ]);
     return $value;
} 

add_filter( 'http_request_args', 'dm_prevent_update_check', 10, 2 );
function dm_prevent_update_check( $r, $url ) {
    if ( 0 === strpos( $url, 'http://api.wordpress.org/plugins/update-check/' ) ) {
        $my_plugin = plugin_basename( __FILE__ );
        $plugins = unserialize( $r['body']['plugins'] );
        unset( $plugins->plugins[$my_plugin] );
        unset( $plugins->active[array_search( $my_plugin, $plugins->active )] );
        $r['body']['plugins'] = serialize( $plugins );
    }
    return $r;
}

remove_action( 'load-update-core.php', 'wp_update_plugins' );

// Disable Avatars from Admin Navbar
add_action(
	'admin_bar_menu',
	function() {
		add_filter( 'pre_option_show_avatars', '__return_zero' );
	},
	0
);
add_action(
	'admin_bar_menu',
	function() {
		remove_filter( 'pre_option_show_avatars', '__return_zero' );
	},
	10
);

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

//Disable WP logo from Admin Navbar
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

}
}