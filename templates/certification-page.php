<?php
/*
Template Name: Страница Дипломирования
*/
?>

<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="text-center mt-5">
                <h1 class="title">Дипломирование</h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="dox-text text-center my-5 second-title">Документы</div>
            <div class="d-block d-md-flex row mb-5 pb-5 my-md-5 py-md-5">
                <div class="col mb-3 mb-md-0">
                    <div class="shield d-flex flex-column align-items-center">
                        <img src="../images/shield.svg" alt="">
                        <a href="#" class="roboto24">Гост</a>
                    </div>
                </div>
                <div class="col">
                    <div class="methodical d-flex flex-column align-items-center">
                        <img src="../images/open-book.svg" alt="">
                        <a href="#" class="roboto24">Методические указания</a>
                    </div>
                </div>
            </div>
            <?php echo do_shortcode('[metaslider id="115"]'); ?>
            <p class="text-right"><a href="#">в альбом Дипломирование</a></p>
            <div class="mb-5">
                <?php
                $args = array(
                    'post_type' => 'info-blocks',
                    'posts_per_page' => 0,
                    'degree' => 'bakalavrat',
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="conf_dropdown_element_first d-flex flex-row justify-content-center justify-content-lg-start mt-5 px-3 py-2"
                     id="conf_dropdown_button1">
                    2018-2019
                    <a class="d-none d-lg-block ml-3" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-down.svg" height="25px" width="25px" alt="dropdown_button">
                    </a>
                </div>
                <div class="dropdown_elements animated mt-5" id="drpdn_el_1">
                    <div class="dropdown_element">
                        <p class="roboto24bd">Бакалаврат</p>
                        <p class="roboto18smbd">ВТ-17</p>
                        <div class="table-responsive-sm">
                            <table class="table table-sertif">
                                <thead class="roboto18smbd bg-light" style="color: #007bff;">
                                <tr>
                                    <th style="width: 25%;">ФИО</th>
                                    <th style="width: 25%;">Руководитель</th>
                                    <th class="text-right">Тема</th>
                                </tr>
                                </thead>
                                <tbody class="roboto18">
                                <tr>
                                    <td>Иванов И. И.</td>
                                    <td class="roboto18smbd">Иванов И. И.</td>
                                    <td class="text-right">Автоматизированная система учета и планирования
                                        обработки
                                        металла резаньем</td>
                                </tr>
                                <tr>
                                    <td>Иванов И. И.</td>
                                    <td class="roboto18smbd">Иванов И. И.</td>
                                    <td class="text-right">Автоматизированная система учета и планирования
                                        обработки
                                        металла резаньем</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
