<?php
class ft_font_customizer
{
	public function __construct()
	{
		add_action('customize_register' , array($this , 'ft_register_customizer_section' ));
	}

	public function ft_register_customizer_section($wp_customize)
	{	
		//initialize section
		$this->ft_typography_callout_section($wp_customize);
	}

	private function ft_typography_callout_section($wp_customize)
	{

		$wp_customize->add_panel( 'fonts_typo_settings', array(
			'id'   			 =>'pt-typo-section',
			'priority'       => 1,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => 'Fonts Typography',
			'description'    => '',
		) );

		$wp_customize->add_section('ft-typography-section' , array(			
			'title' => 'Fonts For Tags',
			'priority' => 1,
			'panel' => 'fonts_typo_settings',
		));			

		$wp_customize->add_setting( 'custom_typography', array(
			'default' => 'no',
			'transport' => 'refresh',
		) );

		$wp_customize->add_control( 'custom_typography', array(
			'label' => __( 'Use Custom Typography', 'fonts-typo' ),
			'type' => 'select',
			'section' => 'ft-typography-section',
			'settings' => 'custom_typography',
			'description' => __( 'Choose "Yes" If You Want To Set Custom Fonts' ),
			'choices' => array(
				'yes' => __( 'Yes', 'fonts-typo' ),
				'no' => __( 'No', 'fonts-typo' ),
			),
		) );	

		//Typo for H1 start

		//Font Family

		$wp_customize->add_setting('custom_h1_typo', array(
			'default' => '',    		
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h1_typo', array(
			'label' => __('Font for H1 Tag', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h1_typo',
			'type' => 'select',
			'description' => __( 'Choose Your Font Family' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => $this->ft_get_google_fonts_active_callback(),
			
		));		

		//Text transform

		$wp_customize->add_setting('custom_h1_text_transform_style', array(
			'default' => 'capitalize',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h1_text_transform_style', array(
			'label' => __('Font Style for h1', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h1_text_transform_style',
			'type' => 'select',
			'description' => __( 'Choose Your Font Style' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => array(
				'capitalize' => __( 'Capitalize' ),
				'uppercase' => __( 'Uppercase' ),
				'lowercase' => __( 'Lowercase' ),
			),
		));

		//Font size

		$wp_customize->add_setting('custom_h1_font_size', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h1_font_size', array(
			'label' => __('Font Size for h1', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h1_font_size',
			'description' => __( 'Put Your Font Size In Pixel' ),
			'type' => 'text',
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			
		));

		//Typo for H1 end

		//Typo for H2 start

		//Font Family

		$wp_customize->add_setting('custom_h2_typo', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h2_typo', array(
			'label' => __('Font for H2 Tag', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h2_typo',
			'type' => 'select',
			'description' => __( 'Choose Your Font Family' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => $this->ft_get_google_fonts_active_callback(),
		));		

		//Text transform

		$wp_customize->add_setting('custom_h2_text_transform_style', array(
			'default' => 'capitalize',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h2_text_transform_style', array(
			'label' => __('Font Style for H2', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h2_text_transform_style',
			'type' => 'select',
			'description' => __( 'Choose Your Font Style' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => array(
				'capitalize' => __( 'Capitalize' ),
				'uppercase' => __( 'Uppercase' ),
				'lowercase' => __( 'Lowercase' ),
			),
		));

		//Font size

		$wp_customize->add_setting('custom_h2_font_size', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h2_font_size', array(
			'label' => __('Font Size for h2', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h2_font_size',
			'description' => __( 'Put Your Font Size In Pixel' ),
			'type' => 'text',
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
		));

		//Typo for H2 end

		//Typo for H3 start

		//Font Family

		$wp_customize->add_setting('custom_h3_typo', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h3_typo', array(
			'label' => __('Font for H3 Tag', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h3_typo',
			'type' => 'select',
			'description' => __( 'Choose Your Font Family' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => $this->ft_get_google_fonts_active_callback(),
		));		

		//Text transform

		$wp_customize->add_setting('custom_h3_text_transform_style', array(
			'default' => 'capitalize',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h3_text_transform_style', array(
			'label' => __('Font Style for H3', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h3_text_transform_style',
			'type' => 'select',
			'description' => __( 'Choose Your Font Style' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => array(
				'capitalize' => __( 'Capitalize' ),
				'uppercase' => __( 'Uppercase' ),
				'lowercase' => __( 'Lowercase' ),
			),
		));

		//Font size

		$wp_customize->add_setting('custom_h3_font_size', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h3_font_size', array(
			'label' => __('Font Size for h3', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h3_font_size',
			'description' => __( 'Put Your Font Size In Pixel' ),
			'type' => 'text',
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
		));

		//Typo for H3 end

		//Typo for H4 start

		//Font Family

		$wp_customize->add_setting('custom_h4_typo', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h4_typo', array(
			'label' => __('Font for H4 Tag', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h4_typo',
			'type' => 'select',
			'description' => __( 'Choose Your Font Family' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => $this->ft_get_google_fonts_active_callback(),
		));		

		//Text transform

		$wp_customize->add_setting('custom_h4_text_transform_style', array(
			'default' => 'capitalize',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h4_text_transform_style', array(
			'label' => __('Font Style for H4', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h4_text_transform_style',
			'type' => 'select',
			'description' => __( 'Choose Your Font Style' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => array(
				'capitalize' => __( 'Capitalize' ),
				'uppercase' => __( 'Uppercase' ),
				'lowercase' => __( 'Lowercase' ),
			),
		));

		//Font size

		$wp_customize->add_setting('custom_h4_font_size', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h4_font_size', array(
			'label' => __('Font Size for h4', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h4_font_size',
			'description' => __( 'Put Your Font Size In Pixel' ),
			'type' => 'text',
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
		));

		//Typo for H4 end	
		
		//Typo for H5 start

		//Font Family

		$wp_customize->add_setting('custom_h5_typo', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h5_typo', array(
			'label' => __('Font for H5 Tag', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h5_typo',
			'type' => 'select',
			'description' => __( 'Choose Your Font Family' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => $this->ft_get_google_fonts_active_callback(),
		));		

		//Text transform

		$wp_customize->add_setting('custom_h5_text_transform_style', array(
			'default' => 'capitalize',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h5_text_transform_style', array(
			'label' => __('Font Style for H5', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h5_text_transform_style',
			'type' => 'select',
			'description' => __( 'Choose Your Font Style' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => array(
				'capitalize' => __( 'Capitalize' ),
				'uppercase' => __( 'Uppercase' ),
				'lowercase' => __( 'Lowercase' ),
			),
		));

		//Font size

		$wp_customize->add_setting('custom_h5_font_size', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_h5_font_size', array(
			'label' => __('Font Size for h5', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_h5_font_size',
			'description' => __( 'Put Your Font Size In Pixel' ),
			'type' => 'text',
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
		));

		//Typo for H5 end

		//Typo for P tag start

		//Font Family

		$wp_customize->add_setting('custom_p_typo', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_p_typo', array(
			'label' => __('Font for Paragraph', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_p_typo',
			'type' => 'select',
			'description' => __( 'Choose Your Font Family' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => $this->ft_get_google_fonts_active_callback(),
		));		

		//Text transform

		$wp_customize->add_setting('custom_p_text_transform_style', array(
			'default' => 'capitalize',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_p_text_transform_style', array(
			'label' => __('Font Style for Paragraph', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_p_text_transform_style',
			'type' => 'select',
			'description' => __( 'Choose Your Font Style' ),
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
			'choices' => array(
				'capitalize' => __( 'Capitalize' ),
				'uppercase' => __( 'Uppercase' ),
				'lowercase' => __( 'Lowercase' ),
			),
		));

		//Font size

		$wp_customize->add_setting('custom_p_font_size', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_p_font_size', array(
			'label' => __('Font Size for Paragraph', 'fonts-typo'),
			'section' => 'ft-typography-section',
			'settings' => 'custom_p_font_size',
			'description' => __( 'Put Your Font Size In Pixel' ),
			'type' => 'text',
			'active_callback' => array( $this,'ft_typo_setting_active_callback'),
		));

		//Typo for P tag end


		$wp_customize->add_section('pt-body-typography-section' , array(			
			'title' => 'Fonts For Whole site',
			'priority' => 2,
			'panel' => 'fonts_typo_settings',
		));	

		//Typo for body start

		$wp_customize->add_setting( 'body_custom_typography', array(
			'default' => 'no',
			'transport' => 'refresh',
		) );

		$wp_customize->add_control( 'body_custom_typography', array(
			'label' => __( 'Use For Whole site', 'fonts-typo' ),
			'type' => 'select',
			'section' => 'pt-body-typography-section',
			'settings' => 'body_custom_typography',
			'description' => __( 'Choose "Yes" If You Want To Set Custom Fonts for whole site' ),
			'choices' => array(
				'yes' => __( 'Yes', 'fonts-typo' ),
				'no' => __( 'No', 'fonts-typo' ),
			),
		) );

		//Font Family

		$wp_customize->add_setting('custom_body_typo', array(
			'default' => '',
			'transport' => 'refresh',
		));

		$wp_customize->add_control('custom_body_typo', array(
			'label' => __('Font for Whole Site', 'fonts-typo'),
			'section' => 'pt-body-typography-section',
			'settings' => 'custom_body_typo',
			'type' => 'select',
			'description' => __( 'Choose Your Font Family' ),
			'active_callback' => array( $this,'ft_typo_body_setting_active_callback'),
			'choices' => $this->ft_get_google_fonts_active_callback(),
		));		

		//Typo for P tag end

	}

	//conditional Logic

	//typo condition

	public function ft_typo_setting_active_callback() {
		return 'yes' === get_theme_mod( 'custom_typography', 'yes' );
	}		

	public function ft_typo_body_setting_active_callback() {
		return 'yes' === get_theme_mod( 'body_custom_typography', 'yes' );
	}	

	//Google Fonts List

	public function ft_get_google_fonts_active_callback() {
		$url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDDn7cnqCxy5pJd34X0D0pfy4yBVFAoBhM';
		$response = wp_remote_get($url);
		$fonts = array('' => 'Default');
		if (is_array($response) && !is_wp_error($response)) {
			$body = wp_remote_retrieve_body($response);
			$result = json_decode($body);
			if (isset($result->items)) {
				foreach ($result->items as $item) {
					$family = $item->family;
					$fonts[$family] = $family;
				}
			}
		}
		return $fonts;
	}

}
new ft_font_customizer();
?>