<?php
/**
 * portfolio-theme Theme Customizer.
 *
 * @package portfolio-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

//Hero Section

	$wp_customize->add_section(
			"hero",
			array("title" => __("Hero Section", "hero_section"), 
					"priority" => 30)
		);

	$wp_customize->add_setting(
		'background_img',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'background_img',
	        array(
	            'label' => __('Background Image', 'background_img_logo'),
	            'section' => 'hero',
	            'settings' => 'background_img'
	        )
	    )
	);

	$wp_customize->add_setting(
		'hero_header',
		array('default' => 'Made For Designers',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'hero_header',
		array(
			'label' => __('Hero Header Text', 'hero_header_label'),
			'section' => 'hero', 			
			'settings' => 'hero_header',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'hero_subtext',
		array('default' => 'Create your online portfolio in minutes with the professionally and lovingly designed REEN website template. Customize your site with versatile and easy to use features.',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'hero_subtext',
		array(
			'label' => __('Hero Sub-text', 'hero_subtext_label'),
			'section' => 'hero', 			
			'settings' => 'hero_subtext',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'hero_button',
		array('default' => 'Get Started Now',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'hero_button',
		array(
			'label' => __('Button Text', 'hero_button_label'),
			'section' => 'hero', 			
			'settings' => 'hero_button',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'logo',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'img-upload',
	        array(
	            'label' => __('Logo', 'logo'),
	            'section' => 'title_tagline',
	            'settings' => 'logo'
	        )
	    )
	);

	$wp_customize->add_setting(
		'email',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'email',
		array(
			'label' => __('Email Address', 'email_label'),
			'section' => 'title_tagline', 			
			'settings' => 'email',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'phone',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'phone',
		array(
			'label' => __('Phone Number', 'phone_label'),
			'section' => 'title_tagline', 			
			'settings' => 'phone',
			'type' => 'text'
			)
		));

//Marketing Section

	$wp_customize->add_section(
			"marketing",
			array("title" => __("Marketing Section", "marketing_section"), 
					"priority" => 40)
		);

	$wp_customize->add_setting(
		'marketing_header',
		array('default' => 'Beautiful. Clean. Responsive.',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_header',
		array(
			'label' => __('Marketing Header Text', 'marketing_header_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_header',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'marketing_text',
		array('default' => 'REEN is a high-quality solution for those who want a beautiful website in no time. Its fully responsive and will adapt itself to any mobile device. iPad, iPhone, Android, it doesnt matter. Your content will always looks its absolute best.',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_text',
		array(
			'label' => __('Marketing Text', 'marketing_text_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_text',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
    'marketing_icon_one',
    array(
        'default' => '',
		    )
		);
	 
	$wp_customize->add_control(
	    'marketing_icon_one',
	    array(
	        'type' => 'select',
	        'section' => 'marketing',
	        'choices' => array(
	            'glyphicon glyphicon-heart-empty' => 'Heart',
	            'glyphicon glyphicon-star-empty' => 'Star',
	            'glyphicon glyphicon-ok' => 'Check',
	            'glyphicon glyphicon-pencil' => 'Pencil',
	            'glyphicon glyphicon-thumbs-up' => 'Thumbs Up',
		        ),
		    )
		);

	$wp_customize->add_setting(
		'marketing_widget_one_header',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_widget_one_header',
		array(
			'label' => __('First Widget Header', 'marketing_one_header_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_widget_one_header',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'marketing_widget_one_text',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_widget_one_text',
		array(
			'label' => __('First Widget text', 'marketing_one_text_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_widget_one_text',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
    'marketing_icon_two',
    array(
        'default' => '',
		    )
		);
	 
	$wp_customize->add_control(
	    'marketing_icon_two',
	    array(
	        'type' => 'select',
	        'section' => 'marketing',
	        'choices' => array(
	            'glyphicon glyphicon-heart-empty' => 'Heart',
	            'glyphicon glyphicon-star-empty' => 'Star',
	            'glyphicon glyphicon-ok' => 'Check',
	            'glyphicon glyphicon-pencil' => 'Pencil',
	            'glyphicon glyphicon-thumbs-up' => 'Thumbs Up',
		        ),
		    )
		);

	$wp_customize->add_setting(
		'marketing_widget_two_header',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_widget_two_header',
		array(
			'label' => __('Second Widget Header', 'marketing_two_header_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_widget_two_header',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'marketing_widget_two_text',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_widget_two_text',
		array(
			'label' => __('Second Widget text', 'marketing_two_text_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_widget_two_text',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
    'marketing_icon_three',
    array(
        'default' => '',
		    )
		);
	 
	$wp_customize->add_control(
	    'marketing_icon_three',
	    array(
	        'type' => 'select',
	        'section' => 'marketing',
	        'choices' => array(
	            'glyphicon glyphicon-heart-empty' => 'Heart',
	            'glyphicon glyphicon-star-empty' => 'Star',
	            'glyphicon glyphicon-ok' => 'Check',
	            'glyphicon glyphicon-pencil' => 'Pencil',
	            'glyphicon glyphicon-thumbs-up' => 'Thumbs Up',
		        ),
		    )
		);

	$wp_customize->add_setting(
		'marketing_widget_three_header',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_widget_three_header',
		array(
			'label' => __('First Widget Header', 'marketing_three_header_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_widget_three_header',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'marketing_widget_three_text',
		array('default' => '',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'marketing_widget_three_text',
		array(
			'label' => __('First Widget text', 'marketing_three_text_label'),
			'section' => 'marketing', 			
			'settings' => 'marketing_widget_three_text',
			'type' => 'text'
			)
		));

//Portfolio Section

	$wp_customize->add_section(
			"portfolio",
			array("title" => __("Portfolio Section", "portfolio_section"), 
					"priority" => 40)
		);

	$wp_customize->add_setting(
		'portfolio_header',
		array('default' => 'See our latest work',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'portfolio_header',
		array(
			'label' => __('Portfolio Header Text', 'portfolio_header_label'),
			'section' => 'portfolio', 			
			'settings' => 'portfolio_header',
			'type' => 'text'
			)
		));

	$wp_customize->add_setting(
		'portfolio_text',
		array('default' => 'Quo ne minim apeirian salutandi. Pro ponderum oportere electram te, ne quo affert pericula, nam melius saperet principes an. Eos no idque saepe scaevola, sit no magna falli euripidis. No inermis deserunt forensibus vel, vis nonumes suscipiantur ut. Harum accusamus no usu.',
			'transport' => 'refresh'
			)
		);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'portfolio_text',
		array(
			'label' => __('Portfolio Text', 'portfolio_text_label'),
			'section' => 'portfolio', 			
			'settings' => 'portfolio_text',
			'type' => 'text'
			)
		));



}
add_action( 'customize_register', 'portfolio_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function portfolio_theme_customize_preview_js() {
	wp_enqueue_script( 'portfolio_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'portfolio_theme_customize_preview_js' );
