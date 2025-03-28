<?php
$menus        = wp_get_nav_menus();
$menu_choices = array();

foreach ( $menus as $menu ) {
	$menu_choices[ $menu->term_id ] = $menu->name;
}
$options = array(
	'elearning_header_quaternary_menu_heading' => array(
		'type'         => 'customind-accordion',
		'title'        => esc_html__( 'Quaternary Menu', 'elearning' ),
		'section'      => 'elearning_header_builder_quaternary_menu',
		'sub_controls' => apply_filters(
			'elearning_header_quaternary_menu_sub_controls',
			array(
				'elearning_header_quaternary_menu' => array(
					'default' => 'none',
					'type'    => 'customind-select',
					'title'   => esc_html__( 'Select a Menu', 'elearning' ),
					'section' => 'elearning_header_builder_quaternary_menu',
					'choices' => elearning_get_menu_options(),
				),
				'elearning_header_quaternary_menu_color_group' => array(
					'type'            => 'customind-color-group',
					'title'           => 'Color',
					'section'         => 'elearning_header_builder_quaternary_menu',
					'sub_controls'    => array(
						'elearning_header_quaternary_menu_color' => array(
							'default'   => '',
							'type'      => 'customind-color',
							'title'     => esc_html__( 'Normal', 'elearning' ),
							'transport' => 'postMessage',
							'section'   => 'elearning_header_builder_quaternary_menu',
						),
						'elearning_header_quaternary_menu_hover_color' => array(
							'default'   => '',
							'type'      => 'customind-color',
							'title'     => esc_html__( 'Hover', 'elearning' ),
							'transport' => 'postMessage',
							'section'   => 'elearning_header_builder_quaternary_menu',
						),
						'elearning_header_quaternary_menu_active_color' => array(
							'default'   => '',
							'type'      => 'customind-color',
							'title'     => esc_html__( 'Active', 'elearning' ),
							'transport' => 'postMessage',
							'section'   => 'elearning_header_builder_quaternary_menu',
						),
					),
					'active_callback' => function () {
						if ( 'default' === get_theme_mod( 'elearning_quaternary_menu_item_style', 'default' ) ) {
							return true;
						}

						return false;
					},
				),
				'elearning_header_quaternary_menu_typography' => array(
					'default'   => array(
						'font-family'    => 'Default',
						'font-weight'    => 'regular',
						'font-size'      => array(
							'desktop' => array(
								'size' => '14',
								'unit' => 'px',
							),
							'tablet'  => array(
								'size' => '',
								'unit' => '',
							),
							'mobile'  => array(
								'size' => '',
								'unit' => '',
							),
						),
						'line-height'    => array(
							'desktop' => array(
								'size' => '1.8',
								'unit' => '-',
							),
							'tablet'  => array(
								'size' => '',
								'unit' => '',
							),
							'mobile'  => array(
								'size' => '',
								'unit' => '',
							),
						),
						'font-style'     => 'normal',
						'text-transform' => 'none',
					),
					'type'      => 'customind-typography',
					'title'     => esc_html__( 'Typography', 'elearning' ),
					'transport' => 'postMessage',
					'section'   => 'elearning_header_builder_quaternary_menu',
				),
			)
		),
		'collapsible'  => apply_filters( 'elearning_quaternary_menu_accordion_collapsible', false ),
	),
);

elearning_customind()->add_controls( $options );
