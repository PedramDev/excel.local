<?php
/**
 */
/*
Plugin Name: EXCEL TABLE Plugin
Plugin URI: https://t.me/Codeya/
Description: IMEI Plugin
Version: 1.0
Author: codeya
Author URI: https://t.me/Codeya/
License: GPLv2 or later
Text Domain: excel_table
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

#region consts
define( 'LOGGER_PATH', __FILE__  );

define( 'EXCEL_TABLE_VERSION', '1.0' );
define( 'EXCEL_TABLE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'EXCEL_TABLE_PLUGIN_FILE', __FILE__  );
define( 'EXCEL_TABLE_VIEW_DIR', plugin_dir_path( __FILE__ ) .'view/' );
define( 'EXCEL_TABLE_PLUGIN_URL', plugins_url() );
#endregion



#region required functions

require_once( EXCEL_TABLE_PLUGIN_DIR . 'inc/index.php' );
require_once( EXCEL_TABLE_PLUGIN_DIR . 'sql/index.php' );
require_once( EXCEL_TABLE_PLUGIN_DIR . 'view/index.php' );
require_once( EXCEL_TABLE_PLUGIN_DIR . 'app/index.php' );
require_once( EXCEL_TABLE_PLUGIN_DIR . 'logger.php' );

#endregion

register_activation_hook ( __FILE__, 'EXCEL_TABLE\create_excel_tables' );
