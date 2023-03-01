<?php

namespace EXCEL_TABLE;

function create_excel_tables(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $sql_imei_table = "
    CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}excel_table` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `col1` VARCHAR(100) NULL,
        `col2` VARCHAR(100) NULL,
        `col3` VARCHAR(100) NULL,
        `col4` VARCHAR(100) NULL,
        `col5` VARCHAR(100) NULL,
        `col6` VARCHAR(100) NULL,
        `col7` VARCHAR(100) NULL,
        `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
      ) $charset_collate;
    ";
    
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql_imei_table );
}

?>