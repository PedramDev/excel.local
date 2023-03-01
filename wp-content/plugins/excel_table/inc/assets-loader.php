<?php

namespace EXCEL_TABLE;

function plugin_assets(){
    wp_enqueue_style("excel_table_bootstrap_css", plugins_url( '/assets/lib/bootstrap/bootstrap.min.css', EXCEL_TABLE_PLUGIN_FILE ) );
    wp_enqueue_script("excel_table_bootstrap_js", plugins_url( '/assets/lib/bootstrap/bootstrap.min.js', EXCEL_TABLE_PLUGIN_FILE ),['jquery'],true);

//    wp_enqueue_style("excel_table_bootstrap_table_css", plugins_url( '/assets/lib/bootstrap-table/bootstrap-table.min.css', EXCEL_TABLE_PLUGIN_FILE ) );
//    wp_enqueue_script("excel_table_bootstrap_table_js", plugins_url( '/assets/lib/bootstrap-table/bootstrap-table.min.js', EXCEL_TABLE_PLUGIN_FILE ),['jquery'],true);
    
    wp_enqueue_style("excel_table_toastr_css", plugins_url( '/assets/lib/toastr/toastr.min.css', EXCEL_TABLE_PLUGIN_FILE ) );
    wp_enqueue_script("excel_table_toastr_js", plugins_url( '/assets/lib/toastr/toastr.min.js', EXCEL_TABLE_PLUGIN_FILE ),['jquery'],true);

//    wp_enqueue_script("excel_table_jquery_validate_js", plugins_url( '/assets/lib/jquery-validation/jquery.validate.min.js', EXCEL_TABLE_PLUGIN_FILE ),['jquery'],true);
//
//    wp_enqueue_style("excel_table_bootstrap-icons", plugins_url( '/assets/lib/bootstrap-icon/bootstrap-icons.css', EXCEL_TABLE_PLUGIN_FILE ) );
}

function add_main_assets( $hook_suffix ) {
    plugin_assets();
    wp_enqueue_script("excel_table_main", plugins_url( '/assets/main.js', EXCEL_TABLE_PLUGIN_FILE ),['jquery'],true);
	wp_localize_script("excel_table_main", "imei_ajaxurl", admin_url("admin-ajax.php"));
}
add_action( 'admin_enqueue_scripts', 'EXCEL_TABLE\add_main_assets', 10, 1 );

function add_main_front_assets( $hook_suffix ) {
    plugin_assets();
	wp_enqueue_script("excel_table_main", plugins_url( '/assets/main.js', EXCEL_TABLE_PLUGIN_FILE ),['jquery'],true);
    wp_enqueue_style("excel_table_custom_css", plugins_url( '/assets/custom.css', EXCEL_TABLE_PLUGIN_FILE ) );
}

add_action( 'wp_enqueue_scripts', 'EXCEL_TABLE\add_main_front_assets', 10, 1 );


?>