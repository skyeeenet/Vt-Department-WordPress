<?php
/*
Template Name: Университетская наука
*/
?>
<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();?>
    <div class="container mb-5">
        <div class="text-center mb-4">
            <h1 class="title mt-4">
                <?php the_title(); ?>
            </h1>
            <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="col-12 col-lg-12 roboto16lt">
            <?php the_content(); ?>
        </div>
    </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="container">
        <?php $confs = carbon_get_post_meta($post->ID, 'el_univ_confs'); $i = 0; ?>
        <?php foreach ($confs as $item): ?>
        <?php $i++; ?>
        <div class="conf_dropdown_element_first d-flex flex-row justify-content-center justify-content-lg-start mt-3 px-3 py-2"
             id="conf_dropdown_button<?php echo $i; ?>">
            <?php echo $item['el_univ_date']; ?>
            <a class="d-none d-lg-block ml-3" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-down.svg" height="25px" width="25px" alt="dropdown_button">
            </a>
        </div>
        <div class="dropdown_elements animated mt-5" id="drpdn_el_<?php echo $i; ?>">
            <div class="dropdown_element">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-perspective-with-a-placeholder-on-it.png" alt="Место проведения">
                        <div>Место проведения:</div>
                        <div><?php echo $item['el_univ_place']; ?></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar-with-a-clock-time-tools.png" alt="Время проведения">
                        <div>Время проведения:</div>
                        <div><?php echo $item['el_univ_time']; ?></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-team.png" alt="Председатель">
                        <div>Председатель:</div>
                        <div><?php echo $item['el_univ_chairman']; ?></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cv.png" alt="Секретарь">
                        <div>Секретарь:</div>
                        <div><?php echo $item['el_univ_secretary']; ?></div>
                    </div>
                </div>
                <?php if($item['el_univ_register'] == 1): ?>
                <div class="col-12 offset-lg-3 col-lg-6 mt-5">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center registration">
                        <div>Открыта регистрация</div>
                        <div>На участие в конференции</div>
                        <div><?php echo $item['el_univ_register_date']; ?></div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="row mt-5 dropdown_elements_menu_text">
                    <div class="col-lg-6 text-center">Темы докладов</div>
                    <div class="col-lg-6 text-center">Докладчик</div>
                </div>
                <div class="mb-4 mb-lg-0"></div>
                <?php foreach ($item['participants'] as $student): ?>
                <div class="row mt-2 dropdown_elements_menu_element">
                    <div class="col-lg-6 text-center"><?php echo $student['theme'] ?></div>
                    <div class="col-lg-6 text-center"><?php echo $student['fio'] ?></div>
                </div>
                <?php endforeach; ?>
                <div
                    class="d-flex flex-column justify-content-center align-items-center align-items-lg-start conf_documents">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doc.png" alt="doc">
                        <a class="ml-2" href="<?php echo $item['el_univ_protocol'] ?>">Прототип проведения</a>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf.png" alt="pdf">
                        <a class="ml-2" href="<?php echo $item['el_univ_theses'] ?>">Сборник тезисов докладов</a>
                    </div>
                </div>
                <!-- Slider -->
                <div class="conf_slider mt-5">
                    <?php foreach ($item['slides'] as $slide): ?>
                    <div class="d-flex justify-content-center"><img src="<?php echo $slide['image']; ?>" alt="Слайд"></div>
                    <?php endforeach; ?>
                </div>
                <!-- Slider end -->
                <div class="conf_slider_link text-center text-lg-right mt-4">
                    <a href="#">В альбом конференции</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</main>

<?php get_footer(); ?>
