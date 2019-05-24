<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header(); ?>
<main>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-8 slck vit_index">
                    <?php echo do_shortcode('[metaslider id="12"]'); ?>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4 declaration">
                    <div class="text-center pt-3 pb-2 declarationHead">
                        Объявления
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center declaration-text">
                        <?php
                        $args = array(
                            'post_type' => 'adverts',
                            'posts_per_page' => 3,
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                        <p class="roboto16lt"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="link roboto16" href="<?php echo get_post_type_archive_link( 'adverts' ); ?>">Все объявления</a>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container.mt-3.mb-3 -->
    </section>
    <section>
        <div class="container mt-5">
            <div class="w-100 d-flex flex-column align-items-center margin-bottom">
                <a href="#">
                    <h2 class="title link">Недавние новости и события</h2>
                </a>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <div style="background-image: url('./images/photo.png');" class="card-image-container"></div>
                        <div class="card-body">
                            <small class="roboto14">2019-03-02 21:17:17</small>
                            <h5 class="mt-3"><a class="roboto22md color_cont" href="#">Заголовок новости</a></h5>
                            <p class="roboto16lt second-text mt-4">
                                Краткое описание новости свозможностью
                                перехода на страницус более детальным
                                описанием...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <div style="background-image: url('./images/photo.png');" class="card-image-container"></div>
                        <div class="card-body">
                            <small class="roboto14">2019-03-02 21:17:17</small>
                            <h5 class="mt-3"><a class="roboto22md color_cont" href="#">Заголовок новости</a></h5>
                            <p class="roboto16lt second-text mt-4">
                                Краткое описание новости свозможностью
                                перехода на страницус более детальным
                                описанием...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <div style="background-image: url('./images/photo.png');" class="card-image-container"></div>
                        <div class="card-body">
                            <small class="roboto14">2019-03-02 21:17:17</small>
                            <h5 class="mt-3"><a class="roboto22md color_cont" href="#">Заголовок новости</a></h5>
                            <p class="roboto16lt second-text mt-4">
                                Краткое описание новости свозможностью
                                перехода на страницус более детальным
                                описанием...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <div style="background-image: url('./images/photo.png');" class="card-image-container"></div>
                        <div class="card-body">
                            <small class="roboto14">2019-03-02 21:17:17</small>
                            <h5 class="mt-3"><a class="roboto22md color_cont" href="#">Заголовок новости</a></h5>
                            <p class="roboto16lt second-text mt-4">
                                Краткое описание новости свозможностью
                                перехода на страницус более детальным
                                описанием...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <div style="background-image: url('./images/photo.png');" class="card-image-container"></div>
                        <div class="card-body">
                            <small class="roboto14">2019-03-02 21:17:17</small>
                            <h5 class="mt-3"><a class="roboto22md color_cont" href="#">Заголовок новости</a></h5>
                            <p class="roboto16lt second-text mt-4">
                                Краткое описание новости свозможностью
                                перехода на страницус более детальным
                                описанием...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <div style="background-image: url('./images/photo.png');" class="card-image-container"></div>
                        <div class="card-body">
                            <small class="roboto14">2019-03-02 21:17:17</small>
                            <h5 class="mt-3"><a class="roboto22md color_cont" href="#">Заголовок новости</a></h5>
                            <p class="roboto16lt second-text mt-4">
                                Краткое описание новости свозможностью
                                перехода на страницус более детальным
                                описанием...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container mt-5">
            <div class="w-100 d-flex flex-column align-items-center mb-3">
                <h2 class="title">Почему именно мы ?</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                    <div></div>
                    <div></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5 mt-sm-5 mt-md-0 mt-lg-4">
                    <div class="adv-item d-flex flex-column align-items-center">
                        <img class="pt-3" src="./images/service-1.png" alt="">
                        <div class="p-3">
                            <h2 class="roboto22md t-transf-cap text-center">Заголовок номер 1</h2>
                            <p class="roboto16 pt-2 text-center">
                                Описание преимущества описание
                                преимущества описание преисущества
                                описание преимущества
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5 mt-sm-5 mt-md-0 mt-lg-4">
                    <div class="adv-item d-flex flex-column align-items-center">
                        <img class="pt-3" src="./images/service-1.png" alt="">
                        <div class="p-3">
                            <h2 class="roboto22md t-transf-cap text-center">Заголовок номер 1</h2>
                            <p class="roboto16 pt-2 text-center">
                                Описание преимущества описание
                                преимущества описание преисущества
                                описание преимущества
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                    <div class="adv-item d-flex flex-column align-items-center">
                        <img class="pt-3" src="./images/service-1.png" alt="">
                        <div class="p-3">
                            <h2 class="roboto22md t-transf-cap text-center">Заголовок номер 1</h2>
                            <p class="roboto16 pt-2 text-center">
                                Описание преимущества описание
                                преимущества описание преисущества
                                описание преимущества
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                    <div class="adv-item d-flex flex-column align-items-center">
                        <img class="pt-3" src="./images/service-1.png" alt="">
                        <div class="p-3">
                            <h2 class="roboto22md t-transf-cap text-center">Заголовок номер 1</h2>
                            <p class="roboto16 pt-2 text-center">
                                Описание преимущества описание
                                преимущества описание преисущества
                                описание преимущества
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                    <div class="adv-item d-flex flex-column align-items-center">
                        <img class="pt-3" src="./images/service-1.png" alt="">
                        <div class="p-3">
                            <h2 class="roboto22md t-transf-cap text-center">Заголовок номер 1</h2>
                            <p class="roboto16 pt-2 text-center">
                                Описание преимущества описание
                                преимущества описание преисущества
                                описание преимущества
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                    <div class="adv-item d-flex flex-column align-items-center">
                        <img class="pt-3" src="./images/service-1.png" alt="">
                        <div class="p-3">
                            <h2 class="roboto22md t-transf-cap text-center">Заголовок номер 1</h2>
                            <p class="roboto16 pt-2 text-center">
                                Описание преимущества описание
                                преимущества описание преисущества
                                описание преимущества
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 d-flex flex-column align-items-center mt-5">
            <h2 class="title">Лучшие студенты</h2>
            <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="container mt-5">
            <div id="thebest">
                <div class="thebest-container pt-5 pb-5">
                    <img src="images/best.jpeg" alt="">
                    <a class="d-block mt-3" href="">
                        <h3>Иванов Иван</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="thebest-container pt-5 pb-5">
                    <img src="images/best.jpeg" alt="">
                    <a class="d-block mt-3" href="">
                        <h3>Иванов Иван</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="thebest-container pt-5 pb-5">
                    <img src="images/best.jpeg" alt="">
                    <a class="d-block mt-3" href="">
                        <h3>Иванов Иван</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="thebest-container pt-5 pb-5">
                    <img src="images/best.jpeg" alt="">
                    <a class="d-block mt-3" href="">
                        <h3>Иванов Иван</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
