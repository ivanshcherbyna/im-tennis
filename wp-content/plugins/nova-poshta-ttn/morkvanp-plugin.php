<?php
/**
 * @link              https://morkva.co.ua/?utm_source=nova-poshta-ttn
 * @since             1.0.0
 * @package           morkvanp-plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Nova Poshta TTN
 * Plugin URI:        https://morkva.co.ua/?utm_source=nova-poshta-ttn
 * Description:       Генеруйте накладні просто зі сторінки замовлення і зекономте тонну часу на відділенні при відправці.
 * Version:           1.0.8
 * Author:            MORKVA
 * Author URI:        https://morkva.co.ua/?utm_source=nova-poshta-ttn
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       morkvanp-plugin
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
defined( 'ABSPATH' ) or die( 'Ти що хакер?' );

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MNP_PLUGIN_VERSION', '1.0.0' );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-morkvanp-plugin-activator.php
 */
function activate_morkvanp_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-morkvanp-plugin-activator.php';
	MNP_Plugin_Activator::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-morkvanp-plugin-deactivator.php
 */
function deactivate_morkvanp_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-morkvanp-plugin-deactivator.php';
	MNP_Plugin_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_morkvanp_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_morkvanp_plugin' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-morkvanp-plugin.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_morkvanp_plugin() {
	$plugin = new MNP_Plugin();
	$plugin->run();
}
run_morkvanp_plugin();