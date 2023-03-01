<?php

// https://wordpress.org/support/article/roles-and-capabilities/
// https://developer.wordpress.org/reference/functions/add_menu_page/

namespace EXCEL_TABLE;


/**
 * Add the top level menu page.
 */
function MENU(){
    add_menu_page("excel_tabel", "محصول اکسل", "1", "excel_table", '\EXCEL_TABLE\add_by_excel', "dashicons-awards", 1); //لیست
    add_submenu_page("excel_table", "آموزش استفاده  محصول اکسل", "آموزش استفاده  محصول اکسل", "1", "how_to_use", "\EXCEL_TABLE\how_to_use", 2);
}

/**
 * Register our imei_options_page to the admin_menu action hook.
 */
add_action("admin_menu", "EXCEL_TABLE\MENU");

?>