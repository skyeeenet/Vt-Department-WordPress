<?php

require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
require get_template_directory() . '/includes/enqueue-script-style.php';

function vtdep_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'vtdep_content_width', 640 );
}
add_action( 'after_setup_theme', 'vtdep_content_width', 0 );

require get_template_directory() . '/includes/custom-header.php';

require get_template_directory() . '/includes/template-tags.php';

require get_template_directory() . '/includes/template-functions.php';

require get_template_directory() . '/includes/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

