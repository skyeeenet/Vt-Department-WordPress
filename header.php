<!doctype html>
<html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body>
<div class="MAINBOX">
    <div class="container-fluid topHeader">
        <div class="container">
            <div class="d-flex flex-column flex-sm-row justify-content-around justify-content-md-between align-items-center pt-3 pb-3 pt-lg-2 pb-lg-2">
                <div class="d-flex mb-3 mb-sm-0 flex-column flex-sm-row justify-content-center align-items-center currentWeek">
                    <div>Текущая&nbsp;неделя:&nbsp;</div>
                    <div id="current_week">Четная</div>
                </div>
                <!-- /.currentWeek -->
                <div class="d-flex flex-column flex-md-row justify-content-around align-items-start align-items-md-center contactsTopHeader">
                    <div class="mt-md-0 mt-md-0 ml-3"><img src="<?php echo get_template_directory_uri().'/assets/images/placeholder.svg' ?>" heigth="20px"width="20px" alt="Address"><span class="pl-2"><?php echo carbon_get_theme_option('el_address') ?></span></div>
                    <div class="mt-2 mt-md-0 ml-3"><img src="<?php echo get_template_directory_uri(). '/assets/images/email.svg'; ?>" heigth="20px" width="20px" alt="Email"><span class="pl-2"><?php echo carbon_get_theme_option('el_email') ?></span></div>
                </div>
                <!-- /.contactsTopHeader -->
            </div>
        </div>
    </div>
    <header id="site-header">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner clearfix">
                <div id="site-logo" class="clearfix">
                    <div id="site-log-inner">
                        <a href="/" rel="home" class="main-logo">
                            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('el_header_logo')); ?>" alt="Логотип сайта кафедры ВТ" width="80">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button">
                    <span></span>
                </div><!-- /.mobile-button -->
                <nav id="main-nav" class="main-nav">
                    <?php wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => null,
                        'items_wrap' => '<ul id="menu-primary-menu" class="menu">%3$s</ul>'
                    ]);
                    ?>
                </nav>
            </div><!-- /.wrap-inner -->
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
