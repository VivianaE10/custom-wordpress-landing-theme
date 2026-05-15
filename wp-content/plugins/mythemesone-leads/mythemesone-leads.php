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
	return $wpdb->prefix . 'contact_leads'; //nombre de la tabla contact_leads
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

//funcion que ejecuta cuando se envia el formulario 
function mythemesone_save_lead() {
    if (
        ! isset( $_POST['mythemesone_nonce'] ) || //nonce permite seguridad 
        ! wp_verify_nonce( $_POST['mythemesone_nonce'], 'mythemesone_save_lead' )
    ) {
        wp_die( 'Solicitud no válida.' );
    }

    $name      = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
    $last_name = isset( $_POST['last-name'] ) ? sanitize_text_field( wp_unslash( $_POST['last-name'] ) ) : '';
    $title     = isset( $_POST['title'] ) ? sanitize_text_field( wp_unslash( $_POST['title'] ) ) : '';
    $company   = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
    $message   = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    global $wpdb; //conexion a la bd
    $table_name = $wpdb->prefix . 'contact_leads';

    $wpdb->insert( //guarda en la bd
        $table_name,
        array(
            'name'       => $name,
            'last_name'  => $last_name,
            'title'      => $title,
            'company'    => $company,
            'message'    => $message,
            'status'     => 'pendiente',
            'created_at' => current_time( 'mysql' ),
            'updated_at' => current_time( 'mysql' ),
        ),
        array( //tipos de datos 
            '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s'
        )
    );

    wp_safe_redirect( add_query_arg( 'lead_success', '1', wp_get_referer() ) );
    exit;
}
//hoks “cuando llegue un formulario con action=mythemesone_save_lead ejecuta esta función”.
add_action( 'admin_post_nopriv_mythemesone_save_lead', 'mythemesone_save_lead' );
add_action( 'admin_post_mythemesone_save_lead', 'mythemesone_save_lead' ); // usuario logeuados