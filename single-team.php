<?php get_header(); ?>

<main>
    <div class="container">

        <div class="d-flex flex-row flex-wrap flex-lg-nowrap justify-content-around align-items-center my-5">
            <div>
                <img class="hoverEffect" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="text-center text-lg-left mt-4 mt-lg-0">
                <?php if ( have_posts() ) : ?>
                <?php
                while ( have_posts() ) :
                the_post();?>
                <div class="personInfo" style="margin-bottom: 40px;">
                    <h1><?php the_title(); ?></h1>
                    <div><?php the_content(); ?></div>
                </div>
                <div><span class="condensed">Должность:</span> <?php echo carbon_get_post_meta($post->ID, 'el_team_duty'); ?></div>
                <div style="margin-bottom: 40px;"><span class="condensed">Кафедра:</span> <?php echo carbon_get_post_meta($post->ID, 'el_team_dep'); ?></div>
                <div class="mb-4 condensed">Контакты</div>
                <div class="d-flex flex-row justify-content-around align-items-center mb-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person_email.png" alt="email" class="blockClick" id="email_click">
                        <div class="text-center condensed mt-2 color_cont">
                            Email
                        </div>
                        <div id="email_popup" class="popup_element">
                            <a href="mailto:<?php echo carbon_get_post_meta($post->ID, 'el_team_email'); ?>"><?php echo carbon_get_post_meta($post->ID, 'el_team_email'); ?></a>
                        </div>
                        <!-- /.text-center -->
                    </div>
                    <!-- /.d-flex flex-column justify-content-center align-items-center -->
                    <div class="d-flex flex-column justify-content-center align-items-center blockClick">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person_call.png" alt="phone" class="blockClick" id="phone_click">
                        <div class="text-center condensed mt-2 color_cont">
                            Телефон
                        </div>
                        <div id="phone_popup" class="popup_element">
                            <?php echo carbon_get_post_meta($post->ID, 'el_team_phone'); ?>
                        </div>
                        <!-- /.text-center -->
                    </div>
                    <!-- /.d-flex flex-column justify-content-center align-items-center -->
                    <div class="d-flex flex-column justify-content-center align-items-center blockClick">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/person_facebook.png" alt="facebook" class="blockClick"
                             id="facebook_click">
                        <div class="text-center condensed mt-2 color_cont">
                            Facebook
                        </div>
                        <div id="facebook_popup" class="popup_element">
                            <a href="<?php echo carbon_get_post_meta($post->ID, 'el_team_fb'); ?>"><?php echo carbon_get_post_meta($post->ID, 'el_team_fb'); ?></a>
                        </div>
                        <!-- /.text-center -->
                    </div>
                    <!-- /.d-flex flex-column justify-content-center align-items-center -->
                </div>
                <div class="mb-3 condensed">Наукометрика</div>
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="mr-4 condensed">Электронный репозиторий НТБ ПГТУ</div>
                    <a href="<?php echo carbon_get_post_meta($post->ID, 'el_team_ntb'); ?>" style="color: inherit;">
                        <div class="buttonGoTo px-3 py-1 roboto16">Перейти</div>
                    </a>
                </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
