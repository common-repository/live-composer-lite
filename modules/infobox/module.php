<?php

class DSLC_Info_Box extends DSLC_Module {

	var $module_id = 'DSLC_Info_Box';
	var $module_title = 'Info Box';
	var $module_icon = 'info';
	var $module_category = 'elements';

	function options() {

		$dslc_options = array(

			array(
				'label' => __( 'Button Link', 'dslc_string' ),
				'id' => 'button_link',
				'std' => '#',
				'type' => 'text'
			),
			
			/**
			 * General
			 */
			
			array(
				'label' => __( 'Elements', 'dslc_string' ),
				'id' => 'elements',
				'std' => 'icon title content button',
				'type' => 'checkbox',
				'choices' => array(
					array(
						'label' => __( 'Icon', 'dslc_string' ),
						'value' => 'icon'
					),
					array(
						'label' => __( 'Title', 'dslc_string' ),
						'value' => 'title'
					),
					array(
						'label' => __( 'Content', 'dslc_string' ),
						'value' => 'content'
					),
					array(
						'label' => __( 'Button', 'dslc_string' ),
						'value' => 'button'
					),
				),
				'section' => 'styling'
			),
			array(
				'label' => __( 'Margin Bottom', 'dslc_string' ),
				'id' => 'css_margin_bottom',
				'std' => '0',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'styling',
				'ext' => 'px',
			),
			

			/**
			 * Icon
			 */

			array(
				'label' => __( 'BG Color', 'dslc_string' ),
				'id' => 'css_icon_bg_color',
				'std' => '#5890e5',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner',
				'affect_on_change_rule' => 'background-color',
				'section' => 'styling',
				'tab' => 'Icon',
			),
			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_icon_color',
				'std' => '#ffffff',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner .dslc-icon',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'Icon',
			),
			array(
				'label' => __( 'Icon', 'dslc_string' ),
				'id' => 'icon_id',
				'std' => 'comments',
				'type' => 'icon',
				'section' => 'styling',
				'tab' => 'Icon',
			),
			array(
				'label' => __( 'Size ( Wrapper )', 'dslc_string' ),
				'id' => 'css_icon_wrapper_width',
				'std' => '84',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner',
				'affect_on_change_rule' => 'width,height',
				'section' => 'styling',
				'tab' => 'Icon',
				'ext' => 'px',
				'min' => 0,
				'max' => 300
			),
			array(
				'label' => __( 'Size ( Icon )', 'dslc_string' ),
				'id' => 'css_icon_width',
				'std' => '31',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner .dslc-icon',
				'affect_on_change_rule' => 'font-size',
				'section' => 'styling',
				'tab' => 'Icon',
				'ext' => 'px'
			),

			/**
			 * Title
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_title_color',
				'std' => '#3d3d3d',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'Title'
			),
			array(
				'label' => __( 'Font Size', 'dslc_string' ),
				'id' => 'css_title_font_size',
				'std' => '17',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'font-size',
				'section' => 'styling',
				'tab' => 'Title',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Font Weight', 'dslc_string' ),
				'id' => 'css_title_font_weight',
				'std' => '800',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'font-weight',
				'section' => 'styling',
				'tab' => 'Title',
				'ext' => '',
				'min' => 100,
				'max' => 900,
				'increment' => 100
			),
			array(
				'label' => __( 'Font Family', 'dslc_string' ),
				'id' => 'css_title_font_family',
				'std' => 'Lato',
				'type' => 'font',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'font-family',
				'section' => 'styling',
				'tab' => 'Title',
			),
			array(
				'label' => __( 'Line Height', 'dslc_string' ),
				'id' => 'css_title_line_height',
				'std' => '17',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'line-height',
				'section' => 'styling',
				'tab' => 'Title',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Margin Bottom', 'dslc_string' ),
				'id' => 'css_title_margin',
				'std' => '21',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'styling',
				'tab' => 'Title',
				'ext' => 'px'
			),
			

			/**
			 * Content
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_content_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'Content'
			),
			array(
				'label' => __( 'Font Size', 'dslc_string' ),
				'id' => 'css_content_font_size',
				'std' => '14',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'font-size',
				'section' => 'styling',
				'tab' => 'Content',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Font Weight', 'dslc_string' ),
				'id' => 'css_content_font_weight',
				'std' => '400',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'font-weight',
				'section' => 'styling',
				'tab' => 'Content',
				'ext' => '',
				'min' => 100,
				'max' => 900,
				'increment' => 100
			),
			array(
				'label' => __( 'Font Family', 'dslc_string' ),
				'id' => 'css_content_font_family',
				'std' => 'Lato',
				'type' => 'font',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'font-family',
				'section' => 'styling',
				'tab' => 'Content',
			),
			array(
				'label' => __( 'Line Height', 'dslc_string' ),
				'id' => 'css_content_line_height',
				'std' => '23',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'line-height',
				'section' => 'styling',
				'tab' => 'Content',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Margin Bottom', 'dslc_string' ),
				'id' => 'css_content_margin',
				'std' => '28',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'styling',
				'tab' => 'Content',
				'ext' => 'px'
			),

			/**
			 * Button
			 */

			array(
				'label' => __( 'BG Color', 'dslc_string' ),
				'id' => 'css_button_bg_color',
				'std' => '#5890e5',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'background-color',
				'section' => 'styling',
				'tab' => 'Button'
			),
			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_button_color',
				'std' => '#ffffff',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'Button'
			),
			array(
				'label' => __( 'Font Size', 'dslc_string' ),
				'id' => 'css_button_font_size',
				'std' => '11',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'font-size',
				'section' => 'styling',
				'tab' => 'Button',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Font Weight', 'dslc_string' ),
				'id' => 'css_button_font_weight',
				'std' => '800',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'font-weight',
				'section' => 'styling',
				'tab' => 'Button',
				'ext' => '',
				'min' => 100,
				'max' => 900,
				'increment' => 100
			),
			array(
				'label' => __( 'Font Family', 'dslc_string' ),
				'id' => 'css_button_font_family',
				'std' => 'Open Sans',
				'type' => 'font',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'font-family',
				'section' => 'styling',
				'tab' => 'Button',
			),
			array(
				'label' => __( 'Padding Vertical', 'dslc_string' ),
				'id' => 'css_button_padding_vertical',
				'std' => '13',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'padding-top,padding-bottom',
				'section' => 'styling',
				'ext' => 'px',
				'tab' => 'Button'
			),
			array(
				'label' => __( 'Padding Horizontal', 'dslc_string' ),
				'id' => 'css_button_padding_horizontal',
				'std' => '16',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'padding-left,padding-right',
				'section' => 'styling',
				'ext' => 'px',
				'tab' => 'Button'
			),
			array(
				'label' => __( 'Icon', 'dslc_string' ),
				'id' => 'button_icon_id',
				'std' => 'cog',
				'type' => 'icon',
				'section' => 'styling',
				'tab' => 'Button',
			),
			array(
				'label' => __( 'Icon - Color', 'dslc_string' ),
				'id' => 'css_button_icon_color',
				'std' => '#b0c8eb',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a .dslc-icon',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'Button'
			),
			array(
				'label' => __( 'Icon - Margin Right', 'dslc_string' ),
				'id' => 'css_button_icon_margin',
				'std' => '5',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a .dslc-icon',
				'affect_on_change_rule' => 'margin-right',
				'section' => 'styling',
				'ext' => 'px',
				'tab' => 'Button'
			),

			/**
			 * Hidden
			 */

			array(
				'label' => __( 'Title', 'dslc_string' ),
				'id' => 'title',
				'std' => 'CLICK TO EDIT',
				'type' => 'textarea',
				'visibility' => 'hidden',
				'section' => 'styling'
			),
			array(
				'label' => __( 'Content', 'dslc_string' ),
				'id' => 'content',
				'std' => 'This is just placeholder text. Click here to edit it.',
				'type' => 'textarea',
				'visibility' => 'hidden',
				'section' => 'styling'
			),
			array(
				'label' => __( 'Button Title', 'dslc_string' ),
				'id' => 'button_title',
				'std' => 'CLICK TO EDIT',
				'type' => 'textarea',
				'visibility' => 'hidden',
				'section' => 'styling'
			),

			/**
			 * Responsive Tablet
			 */

			array(
				'label' => __( 'Responsive', 'dslc_string' ),
				'id' => 'css_res_t',
				'std' => 'disabled',
				'type' => 'select',
				'choices' => array(
					array(
						'label' => __( 'Disabled', 'dslc_string' ),
						'value' => 'disabled'
					),
					array(
						'label' => __( 'Enabled', 'dslc_string' ),
						'value' => 'enabled'
					),
				),
				'section' => 'responsive',
				'tab' => 'tablet',
			),
			array(
				'label' => __( 'Icon - Size ( Wrapper )', 'dslc_string' ),
				'id' => 'css_res_t_icon_wrapper_width',
				'std' => '84',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner',
				'affect_on_change_rule' => 'width,height',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px',
				'min' => 0,
				'max' => 300
			),
			array(
				'label' => __( 'Icon - Size ( Icon )', 'dslc_string' ),
				'id' => 'css_res_t_icon_width',
				'std' => '31',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner .dslc-icon',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Title - Font Size', 'dslc_string' ),
				'id' => 'css_res_t_title_font_size',
				'std' => '17',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Title - Line Height', 'dslc_string' ),
				'id' => 'css_res_t_title_line_height',
				'std' => '17',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'line-height',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Title - Margin Bottom', 'dslc_string' ),
				'id' => 'css_res_t_title_margin',
				'std' => '21',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Content - Font Size', 'dslc_string' ),
				'id' => 'css_res_t_content_font_size',
				'std' => '14',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Content - Line Height', 'dslc_string' ),
				'id' => 'css_res_t_content_line_height',
				'std' => '23',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'line-height',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Content - Margin Bottom', 'dslc_string' ),
				'id' => 'css_res_t_content_margin',
				'std' => '28',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Button - Font Size', 'dslc_string' ),
				'id' => 'css_res_t_button_font_size',
				'std' => '11',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Button - Padding Vertical', 'dslc_string' ),
				'id' => 'css_res_t_button_padding_vertical',
				'std' => '13',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'padding-top,padding-bottom',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px',
			),
			array(
				'label' => __( 'Button - Padding Horizontal', 'dslc_string' ),
				'id' => 'css_res_t_button_padding_horizontal',
				'std' => '16',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'padding-left,padding-right',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px',
			),
			array(
				'label' => __( 'Button - Icon - Margin Right', 'dslc_string' ),
				'id' => 'css_res_t_button_icon_margin',
				'std' => '5',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a .dslc-icon',
				'affect_on_change_rule' => 'margin-right',
				'section' => 'responsive',
				'tab' => 'tablet',
				'ext' => 'px',
			),

			/**
			 * Responsive Phone
			 */

			array(
				'label' => __( 'Responsive', 'dslc_string' ),
				'id' => 'css_res_p',
				'std' => 'disabled',
				'type' => 'select',
				'choices' => array(
					array(
						'label' => __( 'Disabled', 'dslc_string' ),
						'value' => 'disabled'
					),
					array(
						'label' => __( 'Enabled', 'dslc_string' ),
						'value' => 'enabled'
					),
				),
				'section' => 'responsive',
				'tab' => 'phone',
			),
			array(
				'label' => __( 'Margin Bottom', 'dslc_string' ),
				'id' => 'css_res_p_margin_bottom',
				'std' => '0',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px',
			),
			array(
				'label' => __( 'Icon - Size ( Wrapper )', 'dslc_string' ),
				'id' => 'css_res_p_icon_wrapper_width',
				'std' => '84',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner',
				'affect_on_change_rule' => 'width,height',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px',
				'min' => 0,
				'max' => 300
			),
			array(
				'label' => __( 'Icon - Size ( Icon )', 'dslc_string' ),
				'id' => 'css_res_p_icon_width',
				'std' => '31',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-image-inner .dslc-icon',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Title - Font Size', 'dslc_string' ),
				'id' => 'css_res_p_title_font_size',
				'std' => '17',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Title - Line Height', 'dslc_string' ),
				'id' => 'css_res_p_title_line_height',
				'std' => '17',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title h4',
				'affect_on_change_rule' => 'line-height',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Title - Margin Bottom', 'dslc_string' ),
				'id' => 'css_res_p_title_margin',
				'std' => '21',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-title',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Content - Font Size', 'dslc_string' ),
				'id' => 'css_res_p_content_font_size',
				'std' => '14',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Content - Line Height', 'dslc_string' ),
				'id' => 'css_res_p_content_line_height',
				'std' => '23',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content, .dslc-info-box-content p',
				'affect_on_change_rule' => 'line-height',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Content - Margin Bottom', 'dslc_string' ),
				'id' => 'css_res_p_content_margin',
				'std' => '28',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-content',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Button - Font Size', 'dslc_string' ),
				'id' => 'css_res_p_button_font_size',
				'std' => '11',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'font-size',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px'
			),
			array(
				'label' => __( 'Button - Padding Vertical', 'dslc_string' ),
				'id' => 'css_res_p_button_padding_vertical',
				'std' => '13',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'padding-top,padding-bottom',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px',
			),
			array(
				'label' => __( 'Button - Padding Horizontal', 'dslc_string' ),
				'id' => 'css_res_p_button_padding_horizontal',
				'std' => '16',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a',
				'affect_on_change_rule' => 'padding-left,padding-right',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px',
			),
			array(
				'label' => __( 'Button - Icon - Margin Right', 'dslc_string' ),
				'id' => 'css_res_p_button_icon_margin',
				'std' => '5',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-info-box-button a .dslc-icon',
				'affect_on_change_rule' => 'margin-right',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px',
			),

		);

		return apply_filters( 'dslc_module_options', $dslc_options, $this->module_id );

	}

	function output( $options ) {

		global $dslc_active;

		if ( $dslc_active && is_user_logged_in() && current_user_can( DS_LIVE_COMPOSER_CAPABILITY ) )
			$dslc_is_admin = true;
		else
			$dslc_is_admin = false;

		$this->module_start( $options );

		/* Module output stars here */

		// Main Elements
		$elements = $options['elements'];
		if ( ! empty( $elements ) )
			$elements = explode( ' ', trim( $elements ) );
		else
			$elements = array();

		?>

			<div class="dslc-info-box">

				<div class="dslc-info-box-main-wrap">

					<?php if ( in_array( 'icon', $elements ) ) : ?>
						<div class="dslc-info-box-image">
							<div class="dslc-info-box-image-inner">
								<span class="dslc-icon dslc-icon-<?php echo $options['icon_id']; ?> dslc-init-center"></span>
							</div><!-- .dslc-info-box-image-inner -->
						</div><!-- .dslc-info-box-image -->
					<?php endif; ?>

					<div class="dslc-info-box-main">

						<?php if ( in_array( 'title', $elements ) ) : ?>
							<div class="dslc-info-box-title">
								<?php if ( $dslc_is_admin ) : ?>
									<h4 class="dslca-editable-content" data-id="title" data-type="simple" <?php if ( $dslc_is_admin ) echo 'contenteditable'; ?>><?php echo stripslashes( $options['title'] ); ?></h4>
								<?php else : ?>
									<h4><?php echo stripslashes( $options['title'] ); ?></h4>
								<?php endif; ?>
							</div><!-- .dslc-info-box-title -->
						<?php endif; ?>

						<?php if ( in_array( 'content', $elements ) ) : ?>
							<div class="dslc-info-box-content">
								<?php if ( $dslc_is_admin ) : ?>
									<div class="dslca-editable-content" data-id="content">								
										<?php echo stripslashes( $options['content'] ); ?>
									</div><!-- .dslca-editable-content -->
									<div class="dslca-wysiwyg-actions-edit"><span class="dslca-wysiwyg-actions-edit-hook">Edit Content</span></div>
								<?php else : ?>
									<?php echo stripslashes( $options['content'] ); ?>
								<?php endif; ?>
							</div><!-- .dslc-info-box-content -->
						<?php endif; ?>

						<?php if ( in_array( 'button', $elements ) ) : ?>
							<div class="dslc-info-box-button">
								<a href="<?php echo $options['button_link']; ?>">
									<?php if ( isset( $options['button_icon_id'] ) && $options['button_icon_id'] != '' ) : ?>
										<span class="dslc-icon dslc-icon-<?php echo $options['button_icon_id']; ?>"></span>
									<?php endif; ?>
									<?php if ( $dslc_is_admin ) : ?>
										<span class="dslca-editable-content" data-id="button_title" data-type="simple" contenteditable><?php echo $options['button_title']; ?></span>
									<?php else : echo $options['button_title']; endif; ?>
								</a>
							</div><!-- .dslc-info-box-button -->
						<?php endif; ?>

					</div><!-- .dslc-info-box-main -->

				</div><!-- .dslc-info-box-main-wrap -->

			</div><!-- .dslc-info-box -->

		<?php

		/* Module output ends here */

		$this->module_end( $options );

	}

}