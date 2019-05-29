<?php
get_header();
?>
<?php if ( have_posts() ) : ?>
<?php
while ( have_posts() ) :
the_post();?>
<main>
    <section>
        <div class="container mt-4">
            <div class="text-center">
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center d-lg-block specMainContentText mt-5">
                <p class="roboto18lt"><?php echo carbon_get_theme_option('el_sp_upper'); ?></p>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center my-5">
                <h2 class="title_second">Предметы на зно</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row mt-5">
                    <?php $zno = carbon_get_theme_option('el_sp_zno'); ?>
                    <?php foreach ($zno as $item): ?>
                    <div class="col d-flex justify-content-center">
                        <div class="flex-column align-items-center">
                            <div>
                                <div class="d-flex justify-content-center coeffBlock">
                                    <img src="<?php echo $item['image'] ?>" alt="<?php echo $item['name'] ?>">
                                    <div class="eclipseElement"></div>
                                    <div
                                            class="eclipseSubElement d-flex flex-row justify-content-center align-items-center">
                                        <div class="eclipseText text-center">
                                            <?php echo $item['points'] ?>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center vit_text_subjects"><?php echo $item['name'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <p class="roboto24bd">Квалификационные уровни:</p>
                    <p class="roboto18smbd">-срок обучения 4 года</p>
                </div>
            </div>
            <p class="roboto18lt"><?php echo carbon_get_theme_option('el_sp_lower'); ?></p>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center mt-5 mb-4">
                <h2 class="title_second">Изучаемые дисциплины</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <?php $courses = carbon_get_theme_option('el_sp_dic'); ?>
            <?php foreach ($courses as $item): ?>
            <div class="roboto24bd"><?php echo $item['kyrs']; ?></div>
            <?php foreach($item['el_sp_sem'] as $sem): ?>
            <div class="roboto18smbd my-3"><?php echo $sem['semestr']; ?></div>
            <div class="row">
                <?php foreach ($sem['dic'] as $pr): ?>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12">
                    <div style="background-color: <?php echo $pr['color']; ?>" class="listDisciplineElement roboto16 mb-3 py-3 px-0 px-0 text-center"><?php echo $pr['name']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center my-5">
                <h2 class="title_second">Технологии, которые мы изучаем</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="technologies">
                <?php $slides = carbon_get_theme_option('el_sp_slides'); ?>
                <?php foreach ($slides as $slide): ?>
                    <div class="d-flex justify-content-center"><img src="<?php echo $slide['image']; ?>" alt="Технологии"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center mt-5 mb-4">
                <h2 class="title_second">Заграничная стажировка</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-10 d-flex justify-content-center">
                    <p class="roboto18lt"><?php echo carbon_get_theme_option('el_sp_ultra_lower'); ?></p>
                </div>
            </div>
            <div class="foreign_practice row mt-5">
                <?php $sponsors = carbon_get_theme_option('el_sp_oversea'); ?>
                <?php foreach ($sponsors as $item): ?>
                <img class="mr-2" width="400px" height="400px" src="<?php echo $item['image'] ?>" alt="Заграничная стажировка">
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="d-flex justify-content-center mb-4">
                <div class="gallery">
                    <div class="d-flex flex-row flex-wrap flex-lg-nowrap justify-content-around ">
                        <?php $sponsors = carbon_get_theme_option('el_sp_sponsors'); ?>
                        <?php foreach ($sponsors as $item): ?>
                            <img class="p-3" src="<?php echo $item['image'] ?>" alt="Спонсоры">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php endwhile;?>
<?php endif; ?>
<?php
get_footer(); ?>
