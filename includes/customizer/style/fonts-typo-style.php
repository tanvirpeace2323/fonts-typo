<?php

add_action( 'wp_head', 'ft_typography_settings');

function ft_typography_settings()
{
	
	$h1_inline_css = '';
	$h2_inline_css = '';
	$h3_inline_css = '';
	$h4_inline_css = '';
	$h5_inline_css = '';
	$p_inline_css = '';
	$body_inline_css = '';

	if(!empty(get_theme_mod('custom_typography')) && get_theme_mod('custom_typography') == 'yes')
	{	

		//typo for h1 tag start

		if(!empty(get_theme_mod('custom_h1_typo')) || !empty(get_theme_mod('custom_h1_text_transform_style')) || !empty(get_theme_mod('custom_h1_font_size')) )
		{	
			$h1_inline_css .= 'font-family:'.get_theme_mod('custom_h1_typo').' !important;';

			if(!empty(get_theme_mod('custom_h1_text_transform_style')))
			{
				$h1_inline_css .= 'text-transform:'.get_theme_mod('custom_h1_text_transform_style').' !important;';
			}
			if(!empty(get_theme_mod('custom_h1_font_size')))
			{
				$h1_inline_css .= 'font-size:'.get_theme_mod('custom_h1_font_size').'px !important;';
			}

			wp_register_style( 'h1-handle', false );
			wp_enqueue_style( 'h1-handle' );

			wp_add_inline_style( 'h1-handle', 'body h1 { '.$h1_inline_css.' }' );

			$fonts_url = '';

			$font_families = array();

			$customizer_font = get_theme_mod('custom_h1_typo');

			if ( 'off' !== $customizer_font)
			{
				$font_families[] = $customizer_font.':wght@200;300;400;500;600;700;800;900';
			}

			$query_args = array(
				'family'  =>   implode( '&family=', $font_families ) ,
				'subset'  =>  urlencode('latin,latin-ext' ),
				'display' =>  urlencode('swap' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );

			wp_enqueue_style( 'fonts_typo-h1-customizer-fonts', $fonts_url, array(), null );
		}

		//typo for h1 tag end

		//typo for h2 tag start

		if(!empty(get_theme_mod('custom_h2_typo')) || !empty(get_theme_mod('custom_h2_text_transform_style')) || !empty(get_theme_mod('custom_h2_font_size')) )
		{	
			$h2_inline_css .= 'font-family:'.get_theme_mod('custom_h2_typo').' !important;';

			if(!empty(get_theme_mod('custom_h2_text_transform_style')))
			{
				$h2_inline_css .= 'text-transform:'.get_theme_mod('custom_h2_text_transform_style').' !important;';
			}
			if(!empty(get_theme_mod('custom_h2_font_size')))
			{
				$h2_inline_css .= 'font-size:'.get_theme_mod('custom_h2_font_size').'px !important;';
			}

			wp_register_style( 'h2-handle', false );
			wp_enqueue_style( 'h2-handle' );

			wp_add_inline_style( 'h2-handle', 'body h2 { '.$h2_inline_css.' }' );

			$fonts_url = '';

			$font_families = array();

			$customizer_font = get_theme_mod('custom_h2_typo');

			if ( 'off' !== $customizer_font)
			{
				$font_families[] = $customizer_font.':wght@200;300;400;500;600;700;800;900';
			}

			$query_args = array(
				'family'  =>   implode( '&family=', $font_families ) ,
				'subset'  =>  urlencode('latin,latin-ext' ),
				'display' =>  urlencode('swap' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );

			wp_enqueue_style( 'fonts_typo-h2-customizer-fonts', $fonts_url, array(), null );
		}

		//typo for h2 tag end

		//typo for h3 tag start

		if(!empty(get_theme_mod('custom_h3_typo')) || !empty(get_theme_mod('custom_h3_text_transform_style')) || !empty(get_theme_mod('custom_h3_font_size')) )
		{	
			$h3_inline_css .= 'font-family:'.get_theme_mod('custom_h3_typo').' !important;';

			if(!empty(get_theme_mod('custom_h3_text_transform_style')))
			{
				$h3_inline_css .= 'text-transform:'.get_theme_mod('custom_h3_text_transform_style').' !important;';
			}
			if(!empty(get_theme_mod('custom_h3_font_size')))
			{
				$h3_inline_css .= 'font-size:'.get_theme_mod('custom_h3_font_size').'px !important;';
			}

			wp_register_style( 'h3-handle', false );
			wp_enqueue_style( 'h3-handle' );

			wp_add_inline_style( 'h3-handle', 'body h3 { '.$h3_inline_css.' }' );

			$fonts_url = '';

			$font_families = array();

			$customizer_font = get_theme_mod('custom_h3_typo');

			if ( 'off' !== $customizer_font)
			{
				$font_families[] = $customizer_font.':wght@200;300;400;500;600;700;800;900';
			}

			$query_args = array(
				'family'  =>   implode( '&family=', $font_families ) ,
				'subset'  =>  urlencode('latin,latin-ext' ),
				'display' =>  urlencode('swap' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );

			wp_enqueue_style( 'fonts_typo-h3-customizer-fonts', $fonts_url, array(), null );
		}

		//typo for h3 tag end


		//typo for h4 tag start

		if(!empty(get_theme_mod('custom_h4_typo')) || !empty(get_theme_mod('custom_h4_text_transform_style')) || !empty(get_theme_mod('custom_h4_font_size')) )
		{	
			$h4_inline_css .= 'font-family:'.get_theme_mod('custom_h4_typo').' !important;';

			if(!empty(get_theme_mod('custom_h4_text_transform_style')))
			{
				$h4_inline_css .= 'text-transform:'.get_theme_mod('custom_h4_text_transform_style').' !important;';
			}
			if(!empty(get_theme_mod('custom_h4_font_size')))
			{
				$h4_inline_css .= 'font-size:'.get_theme_mod('custom_h4_font_size').'px !important;';
			}

			wp_register_style( 'h4-handle', false );
			wp_enqueue_style( 'h4-handle' );

			wp_add_inline_style( 'h4-handle', 'body h4 { '.$h4_inline_css.' }' );

			$fonts_url = '';

			$font_families = array();

			$customizer_font = get_theme_mod('custom_h4_typo');

			if ( 'off' !== $customizer_font)
			{
				$font_families[] = $customizer_font.':wght@200;300;400;500;600;700;800;900';
			}

			$query_args = array(
				'family'  =>   implode( '&family=', $font_families ) ,
				'subset'  =>  urlencode('latin,latin-ext' ),
				'display' =>  urlencode('swap' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );

			wp_enqueue_style( 'fonts_typo-h4-customizer-fonts', $fonts_url, array(), null );
		}

		//typo for h4 tag end	


		//typo for h5 tag start

		if(!empty(get_theme_mod('custom_h5_typo')) || !empty(get_theme_mod('custom_h5_text_transform_style')) || !empty(get_theme_mod('custom_h5_font_size')) )
		{	
			$h5_inline_css .= 'font-family:'.get_theme_mod('custom_h5_typo').' !important;';

			if(!empty(get_theme_mod('custom_h5_text_transform_style')))
			{
				$h5_inline_css .= 'text-transform:'.get_theme_mod('custom_h5_text_transform_style').' !important;';
			}
			if(!empty(get_theme_mod('custom_h5_font_size')))
			{
				$h5_inline_css .= 'font-size:'.get_theme_mod('custom_h5_font_size').'px !important;';
			}

			wp_register_style( 'h5-handle', false );
			wp_enqueue_style( 'h5-handle' );

			wp_add_inline_style( 'h5-handle', 'body h5 { '.$h5_inline_css.' }' );

			$fonts_url = '';

			$font_families = array();

			$customizer_font = get_theme_mod('custom_h5_typo');

			if ( 'off' !== $customizer_font)
			{
				$font_families[] = $customizer_font.':wght@200;300;400;500;600;700;800;900';
			}

			$query_args = array(
				'family'  =>   implode( '&family=', $font_families ) ,
				'subset'  =>  urlencode('latin,latin-ext' ),
				'display' =>  urlencode('swap' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );

			wp_enqueue_style( 'fonts_typo-h5-customizer-fonts', $fonts_url, array(), null );
		}

		//typo for h5 tag end	

		//typo for P tag start

		if(!empty(get_theme_mod('custom_p_typo')) || !empty(get_theme_mod('custom_p_text_transform_style')) || !empty(get_theme_mod('custom_p_font_size')) )
		{	
			$p_inline_css .= 'font-family:'.get_theme_mod('custom_p_typo').' !important;';

			if(!empty(get_theme_mod('custom_p_text_transform_style')))
			{
				$p_inline_css .= 'text-transform:'.get_theme_mod('custom_p_text_transform_style').' !important;';
			}
			if(!empty(get_theme_mod('custom_p_font_size')))
			{
				$p_inline_css .= 'font-size:'.get_theme_mod('custom_p_font_size').'px !important;';
			}

			wp_register_style( 'p-handle', false );
			wp_enqueue_style( 'p-handle' );

			wp_add_inline_style( 'p-handle', 'body p { '.$p_inline_css.' }' );

			$fonts_url = '';

			$font_families = array();

			$customizer_font = get_theme_mod('custom_p_typo');

			if ( 'off' !== $customizer_font)
			{
				$font_families[] = $customizer_font.':wght@200;300;400;500;600;700;800;900';
			}

			$query_args = array(
				'family'  =>   implode( '&family=', $font_families ) ,
				'subset'  =>  urlencode('latin,latin-ext' ),
				'display' =>  urlencode('swap' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );

			wp_enqueue_style( 'fonts_typo-p-customizer-fonts', $fonts_url, array(), null );
		}

		//typo for p tag end	

		//typo for whole site start

		if(!empty(get_theme_mod('custom_body_typo')) && get_theme_mod('body_custom_typography') == 'yes')
		{	
			$body_inline_css .= 'font-family:'.get_theme_mod('custom_body_typo').' !important;';

			wp_register_style( 'body-handle', false );
			wp_enqueue_style( 'body-handle' );

			wp_add_inline_style( 'body-handle', 'body { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body h1 { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body h2 { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body h3 { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body h4 { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body h5 { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body span { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body input { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body li { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body p { '.$body_inline_css.' }' );
			wp_add_inline_style( 'body-handle', 'body a { '.$body_inline_css.' }' );

			$fonts_url = '';

			$font_families = array();

			$customizer_font = get_theme_mod('custom_body_typo');

			if ( 'off' !== $customizer_font)
			{
				$font_families[] = $customizer_font.':wght@200;300;400;500;600;700;800;900';
			}

			$query_args = array(
				'family'  =>   implode( '&family=', $font_families ) ,
				'subset'  =>  urlencode('latin,latin-ext' ),
				'display' =>  urlencode('swap' ),
			);
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );

			wp_enqueue_style( 'fonts_typo-body-customizer-fonts', $fonts_url, array(), null );
		}
		//typo for p tag end	
	}
}


function ft_core_print_css($css)
{
	$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$id = substr(str_shuffle(md5($str_result)),0, 5);

	echo '<style id="fonts-typo-custom-style-'.esc_attr($id).'">';
	foreach ( $css as $val ) {
		if ( ! empty( $val[ 'element' ] ) ) {
			echo  "\n" . html_entity_decode(esc_attr($val[ 'element' ])) . "{\n";
			echo esc_attr($val[ 'property' ]) . ":" . esc_attr($val[ 'value' ]) . ";\n";
			echo "}\n\n";
		}
	}
	echo '</style>';
}
?>