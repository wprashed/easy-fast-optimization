<?php

//Remove Options for Uninstall

if( !defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') ) exit;

	delete_option("easy_fast_optimization_check_enable");
	delete_option("easy_fast_optimization_adv_enable");
	delete_option("easy_fast_optimization_html_enable");
	delete_option("easy_fast_optimization_comm_enable");
	delete_option("easy_fast_optimization_emoj_enable");
	delete_option("easy_fast_optimization_migr_enable");
	delete_option("easy_fast_optimization_shor_enable");
	delete_option("easy_fast_optimization_quer_enable");
	delete_option("easy_fast_optimization_foot_enable");
	delete_option("easy_fast_optimization_async_enable");
	delete_option("easy_fast_optimization_lazy_enable");
	delete_option("easy_fast_optimization_cach_enable");
	delete_option("easy_fast_optimization_embd_enable");
	delete_option("easy_fast_optimization_admn_enable");

	
	//***