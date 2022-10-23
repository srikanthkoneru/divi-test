<?php

namespace Divi_Test;

class DT_Feature_Box extends \ET_Builder_Module {

	public $slug       = 'dt_feature_box';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'DT Feature Box', 'divi-test' );
	}

	public function get_fields() {

		return array(
			'heading'     => array(
				'label'           => esc_html__( 'Heading', 'divi-test' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'divi-test' ),
				'toggle_slug'     => 'main_content',
			),
			'content'     => array(
				'label'           => esc_html__( 'Content', 'divi-test' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear below the heading text.', 'divi-test' ),
				'toggle_slug'     => 'main_content',
			),
			'type' => array(
				'label'           => esc_html__( 'Content', 'divi-test' ),
				'type'            => 'select',
				'options'         => array(
                    'one' => esc_html__( 'One', 'divi-test' ),
                    'two' => esc_html__( 'Two', 'divi-test' ),
                ),
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'What type is it.', 'divi-test' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $unprocessed_props, $content = null, $render_slug ) {

		return sprintf(
			'<h1 class="simp-simple-header-heading">%1$s</h1>
			<p>%2$s</p>
            <p>%3$s</p>',
			esc_html( $this->props['heading'] ),
			$this->props['content'],
            esc_html( $this->props['type'] ),
		);

	}

}

new DT_Feature_Box();