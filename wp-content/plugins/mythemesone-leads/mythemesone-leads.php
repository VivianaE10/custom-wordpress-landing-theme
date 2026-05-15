<?php

/**
 * Plugin Name: Contact Leads Manager
 * Description: Crea la tabla personalizada para almacenar los envíos del formulario.
 * Version: 1.0.0
 * Author: Viviana Ospina Escobar
 */
if (! defined('ABSPATH')) {
  exit;
}
//crear la tabla 
function jsl_table_name()
{
  global $wpdb;
  return $wpdb->prefix . 'contact_leads'; //nombre de la tabla contact_leads
}

function jsl_install()
{
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
  dbDelta($sql);
}

register_activation_hook(__FILE__, 'jsl_install');
// Silence is golden.

//funcion que ejecuta cuando se envia el formulario 
function mythemesone_save_lead()
{
  if (
    ! isset($_POST['mythemesone_nonce']) || //nonce permite seguridad 
    ! wp_verify_nonce($_POST['mythemesone_nonce'], 'mythemesone_save_lead')
  ) {
    wp_die('Solicitud no válida.');
  }

  $name      = isset($_POST['name']) ? sanitize_text_field(wp_unslash($_POST['name'])) : '';
  $last_name = isset($_POST['last-name']) ? sanitize_text_field(wp_unslash($_POST['last-name'])) : '';
  $title     = isset($_POST['title']) ? sanitize_text_field(wp_unslash($_POST['title'])) : '';
  $company   = isset($_POST['company']) ? sanitize_text_field(wp_unslash($_POST['company'])) : '';
  $message   = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';

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
      'created_at' => current_time('mysql'),
      'updated_at' => current_time('mysql'),
    ),
    array( //tipos de datos 
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s',
      '%s'
    )
  );

  wp_safe_redirect(add_query_arg('lead_success', '1', wp_get_referer()));
  exit;
}
//hoks “cuando llegue un formulario con action=mythemesone_save_lead ejecuta esta función”.
add_action('admin_post_nopriv_mythemesone_save_lead', 'mythemesone_save_lead');
add_action('admin_post_mythemesone_save_lead', 'mythemesone_save_lead'); // usuario logeuados

//Guardo el formulario 
function mythemesone_leads_menu()
{
  add_menu_page(
    'Contactos',
    'Contactos',
    'manage_options',
    'mythemesone-contact-leads',
    'mythemesone_leads_page',
    'dashicons-email-alt2',
    26
  );
}
add_action('admin_menu', 'mythemesone_leads_menu');


// Creao la pantalla del administrador

function mythemesone_leads_page()
{

  global $wpdb;
  $table_name = jsl_table_name();
  $leads = $wpdb->get_results(
    "SELECT * FROM $table_name ORDER BY created_at DESC"
  );
?>

  <div class="wrap">
    <h1>Contactos</h1>

    <p>
      Aquí puedes visualizar los registros enviados desde el formulario.
    </p>

    <table class="widefat fixed striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cargo</th>
          <th>Empresa</th>
          <th>Mensaje</th>
          <th>Estado</th>
          <th>Fecha</th>
        </tr>
      </thead>

      <tbody>
        <?php if (! empty($leads)) : ?>
          <?php foreach ($leads as $lead) : ?>

            <tr>

              <td>
                <?php echo esc_html($lead->id); ?>
              </td>

              <td>
                <?php echo esc_html($lead->name); ?>
              </td>

              <td>
                <?php echo esc_html($lead->last_name); ?>
              </td>

              <td>
                <?php echo esc_html($lead->title); ?>
              </td>

              <td>
                <?php echo esc_html($lead->company); ?>
              </td>

              <td>
                <?php echo esc_html(wp_trim_words($lead->message, 10)); ?>
              </td>

              <!-- // cambia los estados y actualiza  -->
              <td>
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

                  <?php wp_nonce_field('mythemesone_update_status', 'mythemesone_status_nonce'); ?>

                  <input
                    type="hidden"
                    name="action"
                    value="mythemesone_update_status">

                  <input
                    type="hidden"
                    name="lead_id"
                    value="<?php echo esc_attr($lead->id); ?>">

                  <select name="status">

                    <option
                      value="pendiente"
                      <?php selected($lead->status, 'pendiente'); ?>>
                      Pendiente
                    </option>

                    <option
                      value="contactado"
                      <?php selected($lead->status, 'contactado'); ?>>
                      Contactado
                    </option>

                    <option
                      value="descartado"
                      <?php selected($lead->status, 'descartado'); ?>>
                      Descartado
                    </option>

                  </select>

                  <button type="submit" class="button button-primary">
                    Guardar
                  </button>

                </form>

              </td>

              <td>
                <?php echo esc_html($lead->created_at); ?>
              </td>

            </tr>
          <?php endforeach; ?>

        <?php else : ?>

          <tr>
            <td colspan="8">
              No hay registros todavía.
            </td>
          </tr>
        <?php endif; ?>

      </tbody>
    </table>
  </div>
<?php
}
 //actualiza los estados 
function mythemesone_update_status()
{

  if (! current_user_can('manage_options')) {
    wp_die('No autorizado.');
  }

  if (
    ! isset($_POST['mythemesone_status_nonce']) ||
    ! wp_verify_nonce(
      $_POST['mythemesone_status_nonce'],
      'mythemesone_update_status'
    )
  ) {
    wp_die('Solicitud no válida.');
  }

  $lead_id = isset($_POST['lead_id'])
    ? absint($_POST['lead_id'])
    : 0;

  $status = isset($_POST['status'])
    ? sanitize_text_field(wp_unslash($_POST['status']))
    : '';

  $allowed_statuses = array(
    'pendiente',
    'contactado',
    'descartado'
  );

  if (
    ! $lead_id ||
    ! in_array($status, $allowed_statuses, true)
  ) {

    wp_safe_redirect(
      admin_url('admin.php?page=mythemesone-contact-leads')
    );

    exit;
  }

  global $wpdb;

  $table_name = jsl_table_name();

  $wpdb->update(
    $table_name,
    array(
      'status'     => $status,
      'updated_at' => current_time('mysql'),
    ),
    array(
      'id' => $lead_id,
    ),
    array(
      '%s',
      '%s',
    ),
    array(
      '%d',
    )
  );

  wp_safe_redirect(
    admin_url('admin.php?page=mythemesone-contact-leads')
  );

  exit;
}

//conecta el formulario del panel admin con la funcion php 
add_action('admin_post_mythemesone_update_status', 'mythemesone_update_status');
