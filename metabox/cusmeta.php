<?php 



add_action('cmb2_admin_init', 'custom_metaboxes');

function custom_metaboxes(){

    $testimonial = new_cmb2_box(array(
		'id' => 'testimonialitem',
		'object_types' => array('testimonial'),
		'title' => 'Bottom Details'
	));
    
	$testimonial->add_field(array(
		'id' => 'designation',
		'type' => 'text',
		'name' => 'User Designation'
	));

	$portfolio = new_cmb2_box(array(
		'id' => 'portfolioitem',
		'object_types' => array('portfolio'),
		'title' => 'Additional Information'
	));
	$portfolio->add_field(array(
		'id'	=>	'date',
		'type'	=>	'text',
		'name'	=>	'Project Completation Date'
	));
    
	$portfolio->add_field(array(
		'id' => 'link',
		'type' => 'text',
		'name' => 'Project Link'
	));
	$portfolio->add_field(array(
        'name'             => 'HTML',
        'desc'             => 'Select an option',
        'id'               => 'html',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'yes',
        'options'          => array(
            'no' => __( 'No', 'cmb2' ),
            'yes'   => __( 'Yes', 'cmb2' ))
	));
	$portfolio->add_field(array(
        'name'             => 'CSS',
        'desc'             => 'Select an option',
        'id'               => 'css',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'yes',
        'options'          => array(
            'no' => __( 'No', 'cmb2' ),
            'yes'   => __( 'Yes', 'cmb2' ))
	));
	$portfolio->add_field(array(
        'name'             => 'javaScript',
        'desc'             => 'Select an option',
        'id'               => 'js',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'yes',
        'options'          => array(
            'no' => __( 'No', 'cmb2' ),
            'yes'   => __( 'Yes', 'cmb2' ))
	));
	$portfolio->add_field(array(
        'name'             => 'PHP',
        'desc'             => 'Select an option',
        'id'               => 'php',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'no',
        'options'          => array(
            'no' => __( 'No', 'cmb2' ),
            'yes'   => __( 'Yes', 'cmb2' ))
    ));
	$portfolio->add_field(array(
        'name'             => 'Laravel',
        'desc'             => 'Select an option',
        'id'               => 'laravel',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'no',
        'options'          => array(
            'no' => __( 'No', 'cmb2' ),
            'yes'   => __( 'Yes', 'cmb2' ))
	));
	$portfolio->add_field(array(
        'name'             => 'WordPress',
        'desc'             => 'Select an option',
        'id'               => 'wordpress',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'no',
        'options'          => array(
            'no' => __( 'No', 'cmb2' ),
            'yes'   => __( 'Yes', 'cmb2' ))
    ));
	$teammamber = new_cmb2_box(array(
		'id' => 'teammembers',
		'object_types' => array('team_member'),
		'title' => 'Designation'
	));
	$teammamber->add_field(array(
		'id' => 'designation',
		'type' => 'text',
		'name' => 'Member Designation'
	));


}
