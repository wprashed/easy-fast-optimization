<?php
if ( !function_exists( 'add_action' ) ) {
    echo 'Code is poetry.';
    exit;
}

/*
* Menu Settings
*/
add_action( 'admin_menu', 'easy_fast_optimization_menu' );

function easy_fast_optimization_menu(){
	add_options_page( __('Easy & Fast Optimization', 'easy-fast-optimization-lang'), __('Easy & Fast Optimization', 'easy-fast-optimization-lang'), 'manage_options', 'easy_fast_optimization_options', 'easy_fast_optimization_options' );
}


/*
* Call
*/
require easy_fast_optimization_DIR . 'admin/admin.php';