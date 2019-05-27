<?php

require_once get_template_directory() . '/includes/theme-settings.php';
require_once get_template_directory() . '/includes/widget-areas.php';
require_once get_template_directory() . '/includes/enqueue-script-style.php';
require_once get_template_directory() . '/includes/post-types.php';
require_once get_template_directory() . '/includes/filters.php';

/*Carbon-Fields*/
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
    require get_template_directory() . '/includes/custom-fields-options/metabox.php';
    require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}
/*Carbon-Fields*/


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

