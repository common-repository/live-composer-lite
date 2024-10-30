<?php

class DSLC_Image extends DSLC_Module {

	var $module_id = 'DSLC_Image';
	var $module_title = 'Image';
	var $module_icon = 'picture';
	var $module_category = 'elements';

	function options() {	

		$dslc_options = array(
				
			array(
				'label' => __( 'CT', 'dslc_string' ),
				'id' => 'custom_text',
				'std' => 'This is just some placeholder text. Click to edit it.',
				'type' => 'textarea',
				'visibility' => 'hidden'
			),

			array(
				'label' => __( 'Image', 'dslc_string' ),
				'id' => 'image',
				'std' => '',
				'type' => 'image',
			),
			array(
				'label' => __( 'Link Type', 'dslc_string' ),
				'id' => 'link_type',
				'std' => 'none',
				'type' => 'select',
				'choices' => array(
					array(
						'label' => __( 'None', 'dslc_string' ),
						'value' => 'none',
					),
					array(
						'label' => __( 'URL - Same Tab', 'dslc_string' ),
						'value' => 'url_same',
					),
					array(
						'label' => __( 'URL - New Tab', 'dslc_string' ),
						'value' => 'url_new',
					),
					array(
						'label' => __( 'Lightbox', 'dslc_string' ),
						'value' => 'lightbox',
					),
				)
			),
			array(
				'label' => __( 'Link - URL', 'dslc_string' ),
				'id' => 'link_url',
				'std' => '',
				'type' => 'text',
			),
			array(
				'label' => __( 'Link - Lightbox Image', 'dslc_string' ),
				'id' => 'link_lb_image',
				'std' => '',
				'type' => 'image',
			),

			/**
			 * Styling
			 */

			array(
				'label' => __( 'Align', 'dslc_string' ),
				'id' => 'css_align',
				'std' => 'center',
				'type' => 'select',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-image',
				'affect_on_change_rule' => 'text-align',
				'section' => 'styling',
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
			array(
				'label' => __( 'Margin Bottom', 'dslc_string' ),
				'id' => 'css_margin_bottom',
				'std' => '0',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-image',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'styling',
				'ext' => 'px',
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
				'affect_on_change_el' => '.dslc-image',
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
				'id' => 'css_res_p_margin_bottom',
				'std' => '0',
				'type' => 'slider',
				'refresh_on_change' => false,
				'affect_on_change_el' => '.dslc-image',
				'affect_on_change_rule' => 'margin-bottom',
				'section' => 'responsive',
				'tab' => 'phone',
				'ext' => 'px',
			),

		);

		return apply_filters( 'dslc_module_options', $dslc_options, $this->module_id );

	}

	function output( $options ) {		

		$this->module_start( $options );

		/* Module output starts here */

			global $dslc_active;

			if ( $dslc_active && is_user_logged_in() && current_user_can( DS_LIVE_COMPOSER_CAPABILITY ) )
				$dslc_is_admin = true;
			else
				$dslc_is_admin = false;

			$anchor_class = '';
			$anchor_target = '_self';
			$anchor_href = '#';

			if ( $options['link_type'] == 'url_new' )
				$anchor_target = '_blank';

			if ( $options['link_url'] !== '' )
				$anchor_href = $options['link_url'];

			if ( $options['link_type'] == 'lightbox' && $options['link_lb_image'] !== '' ) {
				$anchor_class .= 'dslc-lightbox-image ';
				$anchor_href = $options['link_lb_image'];
			}
		

			?>

			<div class="dslc-image">

				<?php if ( empty( $options['image'] ) ) : ?>

					<div class="dslc-notification dslc-red"><?php _e( 'No image has been set yet, edit the module to set one.', 'dslc_string' ); ?></div>

				<?php else : ?>

					<?php

						$resize = false;
						$the_image = $options['image'];

					?>

					<?php if ( $options['link_type'] !== 'none' ) : ?>
						<a class="<?php echo $anchor_class; ?>" href="<?php echo $anchor_href; ?>" target="<?php echo $anchor_target; ?>">
					<?php endif; ?>
						<img src="<?php echo $the_image ?>" />
					<?php if ( $options['link_type'] !== 'none' ) : ?>
						</a>
					<?php endif; ?>

				<?php endif; ?>

			</div><!-- .dslc-image -->

			<?php

		/* Module output ends here */

		$this->module_end( $options );

	}

}