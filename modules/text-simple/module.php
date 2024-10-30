<?php

class DSLC_Text_Simple extends DSLC_Module {

	var $module_id = 'DSLC_Text_Simple';
	var $module_title = 'Text';
	var $module_icon = 'pencil';
	var $module_category = 'general';

	function options() {	

		$dslc_options = array(
			array(
				'label' => __( 'Content', 'dslc_string' ),
				'id' => 'content',
				'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				'type' => 'textarea',
				'visibility' => 'hidden',
				'section' => 'styling'
			),

			/**
			 * Styling Options
			 */

			array(
				'label' => __( 'Enable/Disable Custom CSS', 'dslc_string' ),
				'id' => 'css_custom',
				'std' => 'enabled',
				'type' => 'select',
				'choices' => array(
					array(
						'label' => __( 'Enabled', 'dslc_string' ),
						'value' => 'enabled'
					),
					array(
						'label' => __( 'Disabled', 'dslc_string' ),
						'value' => 'disabled'
					),
				),
				'section' => 'styling',
			),
			array(
				'label' => __( 'Margin Bottom', 'dslc_string' ),
				'id' => 'css_margin_bottom',
				'std' => '0',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'styling',
				'ext' => 'px',
			),

			/**
			 * Content
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_main_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content,.dslc-text-module-content p',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'Content'
			),
			array(
				'label' => __( 'Text Align', 'dslc_string' ),
				'id' => 'css_main_text_align',
				'std' => 'left',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content,.dslc-text-module-content p',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
				'tab' => 'Content',
				'choices' => array(
					array(
						'label' => __( 'Left', 'dslc_string' ),
						'value' => 'left',
					),
					array(
						'label' => __( 'Center', 'dslc_string' ),
						'value' => 'center',
					),
					array(
						'label' => __( 'Right', 'dslc_string' ),
						'value' => 'right',
					),
					array(
						'label' => __( 'Justify', 'dslc_string' ),
						'value' => 'justify',
					),
				)
			),

			/**
			 * Heading 1
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_h1_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h1',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'h1'
			),
			array(
				'label' => __( 'Text Align', 'dslc_string' ),
				'id' => 'css_h1_text_align',
				'std' => 'left',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h1',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
				'tab' => 'h1',
				'choices' => array(
					array(
						'label' => __( 'Left', 'dslc_string' ),
						'value' => 'left',
					),
					array(
						'label' => __( 'Center', 'dslc_string' ),
						'value' => 'center',
					),
					array(
						'label' => __( 'Right', 'dslc_string' ),
						'value' => 'right',
					),
					array(
						'label' => __( 'Justify', 'dslc_string' ),
						'value' => 'justify',
					),
				)
			),

			/**
			 * Heading 2
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_h2_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h2',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'H2'
			),
			array(
				'label' => __( 'Text Align', 'dslc_string' ),
				'id' => 'css_h2_text_align',
				'std' => 'left',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h2',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
				'tab' => 'H2',
				'choices' => array(
					array(
						'label' => __( 'Left', 'dslc_string' ),
						'value' => 'left',
					),
					array(
						'label' => __( 'Center', 'dslc_string' ),
						'value' => 'center',
					),
					array(
						'label' => __( 'Right', 'dslc_string' ),
						'value' => 'right',
					),
					array(
						'label' => __( 'Justify', 'dslc_string' ),
						'value' => 'justify',
					),
				)
			),

			/**
			 * Heading 3
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_h3_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h3',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'h3'
			),
			array(
				'label' => __( 'Text Align', 'dslc_string' ),
				'id' => 'css_h3_text_align',
				'std' => 'left',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h3',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
				'tab' => 'h3',
				'choices' => array(
					array(
						'label' => __( 'Left', 'dslc_string' ),
						'value' => 'left',
					),
					array(
						'label' => __( 'Center', 'dslc_string' ),
						'value' => 'center',
					),
					array(
						'label' => __( 'Right', 'dslc_string' ),
						'value' => 'right',
					),
					array(
						'label' => __( 'Justify', 'dslc_string' ),
						'value' => 'justify',
					),
				)
			),

			/**
			 * Heading 4
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_h4_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h4',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'h4'
			),
			array(
				'label' => __( 'Text Align', 'dslc_string' ),
				'id' => 'css_h4_text_align',
				'std' => 'left',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h4',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
				'tab' => 'h4',
				'choices' => array(
					array(
						'label' => __( 'Left', 'dslc_string' ),
						'value' => 'left',
					),
					array(
						'label' => __( 'Center', 'dslc_string' ),
						'value' => 'center',
					),
					array(
						'label' => __( 'Right', 'dslc_string' ),
						'value' => 'right',
					),
					array(
						'label' => __( 'Justify', 'dslc_string' ),
						'value' => 'justify',
					),
				)
			),

			/**
			 * Heading 5
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_h5_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h5',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'h5'
			),
			array(
				'label' => __( 'Text Align', 'dslc_string' ),
				'id' => 'css_h5_text_align',
				'std' => 'left',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h5',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
				'tab' => 'h5',
				'choices' => array(
					array(
						'label' => __( 'Left', 'dslc_string' ),
						'value' => 'left',
					),
					array(
						'label' => __( 'Center', 'dslc_string' ),
						'value' => 'center',
					),
					array(
						'label' => __( 'Right', 'dslc_string' ),
						'value' => 'right',
					),
					array(
						'label' => __( 'Justify', 'dslc_string' ),
						'value' => 'justify',
					),
				)
			),

			/**
			 * Heading 6
			 */

			array(
				'label' => __( 'Color', 'dslc_string' ),
				'id' => 'css_h6_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h6',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'h6'
			),
			array(
				'label' => __( 'Text Align', 'dslc_string' ),
				'id' => 'css_h6_text_align',
				'std' => 'left',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content h6',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
				'tab' => 'h6',
				'choices' => array(
					array(
						'label' => __( 'Left', 'dslc_string' ),
						'value' => 'left',
					),
					array(
						'label' => __( 'Center', 'dslc_string' ),
						'value' => 'center',
					),
					array(
						'label' => __( 'Right', 'dslc_string' ),
						'value' => 'right',
					),
					array(
						'label' => __( 'Justify', 'dslc_string' ),
						'value' => 'justify',
					),
				)
			),

			/**
			 * Links
			 */

			array(
				'label' => __( 'Link Color', 'dslc_string' ),
				'id' => 'css_link_color',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content a',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'links'
			),
			array(
				'label' => __( 'Link - Hover Color', 'dslc_string' ),
				'id' => 'css_link_color_hover',
				'std' => '',
				'type' => 'color',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content a:hover',
				'affect_on_change_rule' => 'color',
				'section' => 'styling',
				'tab' => 'links'
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
				'label' => __( 'Margin Bottom', 'dslc_string' ),
				'id' => 'css_res_t_margin_bottom',
				'std' => '0',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content',
				'affect_on_change_rule' => 'margin-bottom',
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
				'id' => 'css_res_ph_margin_bottom',
				'std' => '0',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-text-module-content',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px',
			),

		);

		return apply_filters( 'dslc_module_options', $dslc_options, $this->module_id );

	}

	function output( $options ) {

		global $dslc_active;		

		$this->module_start( $options );

		/* Module output starts here */
			
			?><div class="dslc-text-module-content"><?php 

				if ( $dslc_active ) {
					?><div class="dslca-editable-content" data-id="content"><?php
				}
				
					$output_content = stripslashes( $options['content'] );
					//$output_content = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $output_content);
					$output_content = do_shortcode( $output_content );
					echo $output_content;

				if ( $dslc_active ) {
					?></div><!-- .dslca-editable-content --><?php
					?><div class="dslca-wysiwyg-actions-edit"><span class="dslca-wysiwyg-actions-edit-hook">Edit Content</span></div><?php
				}

			?></div><?php

		/* Module output ends here */

		$this->module_end( $options );

	}

}