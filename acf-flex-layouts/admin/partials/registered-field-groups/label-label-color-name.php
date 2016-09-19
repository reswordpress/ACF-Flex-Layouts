<?php
acf_add_local_field_group( array(
	'key'                   => 'group_afl_label_label_color_name',
	'title'                 => 'Label/Label Color/Name',
	'fields'                => array(
		array(
			'key'               => 'field_label',
			'label'             => 'Label',
			'name'              => 'label',
			'type'              => 'text',
			'instructions'      => 'For admin purposes only.',
			'required'          => 1,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '40',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array(
			'key'               => 'field_label_color',
			'label'             => 'Label Color',
			'name'              => 'label_color',
			'type'              => 'select',
			'instructions'      => 'Pick a color.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '25',
				'class' => '',
				'id'    => '',
			),
			'choices'           => array(
				'Turquoise'     => 'Turquoise',
				'Green Sea'     => 'Green Sea',
				'Emerald'       => 'Emerald',
				'Nephritis'     => 'Nephritis',
				'Peter River'   => 'Peter River',
				'Belize Hole'   => 'Belize Hole',
				'Amethyst'      => 'Amethyst',
				'Wisteria'      => 'Wisteria',
				'Wet Asphalt'   => 'Wet Asphalt',
				'Midnight Blue' => 'Midnight Blue',
				'Sun Flower'    => 'Sun Flower',
				'Orange'        => 'Orange',
				'Carrot'        => 'Carrot',
				'Pumpkin'       => 'Pumpkin',
				'Alizarin'      => 'Alizarin',
				'Pomegranate'   => 'Pomegranate',
				'Clouds'        => 'Clouds',
				'Silver'        => 'Silver',
				'Concrete'      => 'Concrete',
				'Asbestos'      => 'Asbestos',
			),
			'default_value'     => array(),
			'allow_null'        => 1,
			'multiple'          => 0,
			'ui'                => 1,
			'ajax'              => 0,
			'return_format'     => 'value',
			'placeholder'       => '',
		),
		array(
			'key'               => 'field_name',
			'label'             => 'Name',
			'name'              => 'name',
			'type'              => 'text',
			'instructions'      => 'Admin use only.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '35',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
	),
	'location'              => array(
		array(
			array(
				'param'    => 'post_type',
				'operator' => '==',
				'value'    => 'post',
			),
		),
	),
	'menu_order'            => 0,
	'position'              => 'normal',
	'style'                 => 'default',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => 0,
	'description'           => '',
) );
