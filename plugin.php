<?php
/**
 * The plugin bootstrap file
 *
 * @link              domainy.com
 * @since             1.0.0
 * @package           divi-test
 *
 * @wordpress-plugin
 * Plugin Name:       Divi Test
 * Plugin URI:        http://domainy.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            AuthorName
 * Author URI:        domainy.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       divi-test
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once 'vendor/autoload.php';

define( 'DIVI_TEST_VERSION', '1.0.0' );
define( 'DIVI_TEST_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'DIVI_TEST_PLUGIN_URL', plugins_url( '', __FILE__ ) );

register_activation_hook(
	__FILE__,
	function() {
		\Divi_Test\Plugin::activate();
	}
);
register_deactivation_hook(
	__FILE__,
	function() {
		\Divi_Test\Plugin::deactivate();
	}
);

new \Divi_Test\Plugin();

