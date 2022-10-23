<?php

class Divi_Test extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $gettext_domain = 'divi-test';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = 'divi-test-modules';

	/**
	 * The extension's version
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * DICM_DiviCustomModules constructor.
	 *
	 * @param string $name
	 * @param array  $args
	 */
	public function __construct( $name = 'divi-test-modules', $args = array() ) {
		$this->plugin_dir              = DIVI_TEST_PLUGIN_PATH;
		$this->plugin_dir_url          = DIVI_TEST_PLUGIN_URL . '/';
		$this->_builder_js_data        = array(
			'i10n' => array(
				'divi-test' => array(

				),
			),
		);

		parent::__construct( $name, $args );
	}
}

new Divi_Test;