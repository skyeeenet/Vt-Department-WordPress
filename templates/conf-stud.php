<?php
/*
Template Name: Студенческая наука
*/
?>
<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();?>
    <div class="container">
        <div class="text-center my-5">
            <h1 class="title mt-4"><?php the_title(); ?></h1>
            <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                <div></div>
                <div></div>
            </div>
        </div>
        <p class="col-12 col-lg-12 mt-4 roboto18"><?php the_content(); ?></p>
    </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="container">
        <?php $confs = carbon_get_post_meta($post->ID, 'el_stud_confs'); $i = 0; ?>
        <?php foreach ($confs as $item): ?>
        <?php $i++; ?>
        <div class="conf_dropdown_element_first d-flex flex-row justify-content-center justify-content-lg-start mt-3 px-3 py-2"
             id="conf_dropdown_button<?php echo $i; ?>">
            <?php echo $item['el_univ_date']; ?>
            <a class="d-none d-lg-block ml-3" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-down.svg" height="25px" width="25px" alt="dropdown_button">
            </a>
        </div>
        <div class="dropdown_elements mt-5" id="drpdn_el_<?php echo $i; ?>">
            <div class="dropdown_element">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-perspective-with-a-placeholder-on-it.png" alt="map">
                        <div>Место проведения:</div>
                        <div><?php echo $item['el_univ_place']; ?></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar-with-a-clock-time-tools.png" alt="calendar">
                        <div>Время проведения:</div>
                        <div><?php echo $item['el_univ_time']; ?></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-team.png" alt="team">
                        <div>Председатель:</div>
                        <div><?php echo $item['el_univ_chairman']; ?></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cv.png" alt="secretary">
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

                <div class="row mt-5 dropdown_elements_menu_text d-none d-lg-flex">
                    <div class="col-lg-4 text-center">Темы докладов</div>
                    <div class="col-lg-4 text-center">Докладчик</div>
                    <div class="col-lg-4 text-center">Руководитель</div>
                </div>
                <div class="mb-4 mb-lg-0"></div>
                <?php foreach ($item['participants'] as $student): ?>
                <div class="row mt-2 dropdown_elements_menu_element">
                    <div class="col-lg-4 text-center"><?php echo $student['theme'] ?></div>
                    <div class="col-lg-4 text-center"><?php echo $student['fio'] ?></div>
                    <div class="col-lg-4 text-center"><?php echo $student['lead'] ?></div>
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

                <div class="conf_slider mt-5">
                    <?php foreach ($item['slides'] as $slide): ?>
                    <div class="d-flex justify-content-center"><img src="<?php echo $slide['image']; ?>" alt="Слайд"></div>
                    <?php endforeach; ?>
                </div>

                <div class="conf_slider_link text-center text-lg-right mt-4">
                    <a href="#">В альбом конференции</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php get_footer(); ?>
