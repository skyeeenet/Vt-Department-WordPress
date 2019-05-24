<?php

require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
require get_template_directory() . '/includes/enqueue-script-style.php';
require get_template_directory() . '/includes/post-types.php';

remove_filter('the_content', 'wpautop');

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

function vtdep_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'vtdep_content_width', 640 );
}
add_action( 'after_setup_theme', 'vtdep_content_width', 0 );

//require get_template_directory() . '/includes/custom-header.php';

//require get_template_directory() . '/includes/template-tags.php';

//require get_template_directory() . '/includes/template-functions.php';

//require get_template_directory() . '/includes/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

