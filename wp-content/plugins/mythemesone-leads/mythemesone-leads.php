<?php
/**
 * Plugin Name: Contact Leads Manager
 * Description: Crea la tabla personalizada para almacenar los envíos del formulario.
 * Version: 1.0.0
 * Author: Viviana Ospina Escobar
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function jsl_table_name() {
	global $wpdb;
	return $wpdb->prefix . 'contact_leads';
}

function jsl_install() {
	global $wpdb;

	$table_name      = jsl_table_name();
	$charset_collate  = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
	id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(150) NOT NULL,
	last_name VARCHAR(150) NOT NULL,
	title VARCHAR(150) NOT NULL,
	company VARCHAR(150) NOT NULL,
	message LONGTEXT NOT NULL,
	status VARCHAR(20) NOT NULL DEFAULT 'pendiente',
	created_at DATETIME NOT NULL,
	updated_at DATETIME NULL,
	PRIMARY KEY  (id)
) $charset_collate;";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
}

register_activation_hook( __FILE__, 'jsl_install' );
// Silence is golden.
