<?php
/**
 * Aerodoktor functions and definitions
 *
 * @package Aerodoktor
*/
function aerodoktor_customize_register($wp_customize){

	class Aerodoktor_WP_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';

		public function render_content() {
			?>
        	<label>
        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        	</label>
        	<?php
		}
	}
	class Aerodoktor_WP_Customize_Info_Control extends WP_Customize_Control {
		public $type = 'info';

		public function render_content() {
			?>
				<strong> <?php _e('Если ты по настоящему крут, чувак, дай печенек.','aerodoktor'); ?></strong>
                <div class="donate">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="T5VCDMLPPLBBS">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<p class="btn">
					<a class="button button-primary" target="_blank" href="http://www.vmthemes.com/faq/"><?php _e('Theme Support','aerodoktor') ?></a><br><br>
					<a class="button button-primary" target="_blank" href="http://www.vmthemes.com/preview/aerodoktor/"><?php _e('View Theme Demo','aerodoktor') ?></a><br><br>
					<a class="button button-primary" target="_blank" href="http://www.vmthemes.com/aerodoktor-pro-wordpress-theme/"><?php  _e('Upgrade to Pro','aerodoktor') ?></a>
				</p>
        	<?php
		}
	}
    //===============================
    $wp_customize->add_setting('aerodoktor_theme_options[logo_image]', array(
        'default'           => get_template_directory_uri() . '/images/logo.png',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
        'label'    => __('Section Image', 'aerodoktor'),
        'section'  => 'aerodoktor_services_settings',
        'settings' => 'aerodoktor_theme_options[logo_image]',
    )));
	//===============================
}

add_action('customize_register', 'aerodoktor_customize_register');

function aerodoktor_get_option_defaults() {
	$defaults = array(
		'logo_image' => get_template_directory_uri() . '/images/logo.png',
		'clock_image' => get_template_directory_uri() . '/images/Clock.png',
		'addres_image' => get_template_directory_uri() . '/images/Info-copy.png',
		'placeholder_image' => get_template_directory_uri() . '/images/slide.jpg',
		'phone_image' => get_template_directory_uri() . '/images/phone.png'

		);
	return apply_filters( 'aerodoktor_get_option_defaults', $defaults );
}

function aerodoktor_get_options() {
    // Options API
    return wp_parse_args(
        get_option( 'aerodoktor_theme_options', array() ),
        aerodoktor_get_option_defaults()
    );
}