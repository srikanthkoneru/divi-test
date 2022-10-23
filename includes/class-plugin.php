<?php

namespace Divi_Test;

class Plugin {

	protected $plugin_name;

	protected $version;

	public function __construct() {
		if ( defined( 'DIVI_TEST_VERSION' ) ) {
			$this->version = DIVI_TEST_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'divi-test';

		$this->set_locale();
		$this->hooks();

	}

	public static function activate() {

		if ( version_compare( PHP_VERSION, '7.4', '<' ) ) {
			die( esc_html__( 'This plugin requires PHP version 7.4 or greater.  Sorry about that.', 'divi-test' ) );
		}

	}

	public static function deactivate() {

	}

	private function set_locale() {

		add_action(
			'plugins_loaded',
			function() {

				load_plugin_textdomain(
					'divi-test',
					false,
					DIVI_TEST_PLUGIN_PATH . '/languages/'
				);

			}
		);

	}

	private function hooks() {

        add_action( 'et_builder_ready', array( $this, 'initialize_extension' ) );

	}

	public function initialize_extension() {
        require_once DIVI_TEST_PLUGIN_PATH . 'includes/divi/class-divi-test.php';
		require_once DIVI_TEST_PLUGIN_PATH . 'includes/divi/modules.php';
	}

	public function get_plugin_name() {
		return $this->plugin_name;
	}

	public function get_version() {
		return $this->version;
	}

}
