<?php
/**
 * Plugin Name: Florians toller Kalender
 * Plugin URI: ...
 * Description: Der einzige Kalender auf dem ganzen Wordpress Markt mit variablen Zeiteinstellungen
 * Version: 0.1
 * Author: Florian Mirko Becker
 * Author URI: https://www.florianbecker.eu
 */

function plugin_install(){
    global $wpdb;

    $table_name = $wpdb->prefix . "ftk_booking";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        ID int(11) NOT NULL AUTO_INCREMENT,
        start_time datetime NOT NULL,
        end_time datetime NOT NULL,
        duration int(10) NOT NULL,
        user_id bigint(20) NOT NULL,
        service_id int(10) NOT NULL,        
        PRIMARY KEY  (ID)
    ) $charset_collate;";
    require_once(ABSPATH . "wp-admin/includes/upgrade.php");
    dbDelta($sql);
}