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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shield.svg" alt="Гост">
                        <a href="<?php echo carbon_get_post_meta($post->ID, 'el_certification_gost_file'); ?>" class="roboto24"><?php echo carbon_get_post_meta($post->ID, 'el_certification_gost'); ?></a>
                    </div>
                </div>
                <div class="col">
                    <div class="methodical d-flex flex-column align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/open-book.svg" alt="Методические указания">
                        <a href="<?php echo carbon_get_post_meta($post->ID, 'el_certification_guidelines_file'); ?>" class="roboto24"><?php echo carbon_get_post_meta($post->ID, 'el_certification_guidelines'); ?></a>
                    </div>
                </div>
            </div>
            <?php echo do_shortcode('[metaslider id="115"]'); ?>
            <p class="text-right"><a href="#">в альбом Дипломирование</a></p>
            <div class="mb-5">

                <?php $groups = carbon_get_post_meta($post->ID, 'el_certification_conf'); $i = 0; ?>

                <?php foreach ($groups as $group): ?>
                <?php $i++; ?>
                    <div class="conf_dropdown_element_first d-flex flex-row justify-content-center justify-content-lg-start mt-2 px-3 py-2"
                         id="conf_dropdown_button<?php echo $i; ?>">
                        <?php echo $group['year']; ?>
                        <a class="d-none d-lg-block ml-3" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-down.svg" height="25px" width="25px" alt="dropdown_button">
                        </a>
                    </div>
                    <div class="dropdown_elements animated mt-5" id="drpdn_el_<?php echo $i; ?>">
                        <div class="dropdown_element">
                            <p class="roboto24bd"><?php echo $group['degree']; ?></p>
                            <p class="roboto18smbd"><?php echo $group['group']; ?></p>
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
                                    <?php foreach ($group['participants'] as $item): ?>
                                        <tr>
                                            <td><?php echo $item['fio']; ?></td>
                                            <td class="roboto18smbd"><?php echo $item['lead']; ?></td>
                                            <td class="text-right"><?php echo $item['theme']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
