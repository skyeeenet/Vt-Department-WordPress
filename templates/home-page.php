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
        <div class="container mt-2">
            <div class="w-100 d-flex flex-column align-items-center margin-bottom">
                <a href="<?php echo get_post_type_archive_link('news'); ?>">
                    <h2 class="title link">Недавние новости и события</h2>
                </a>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="row">
                <?php
                $args = array(
                        'post_type' => 'news',
                    'posts_per_page' => 6,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <div style="background-image: url('<?php the_post_thumbnail_url(); ?>');" class="card-image-container"></div>
                        <div class="card-body">
                            <small class="roboto14"><?php the_time("d M Y"); ?></small>
                            <h5 class="mt-3"><a class="roboto22md color_cont" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="roboto16lt second-text mt-4"><?php echo carbon_get_post_meta($post->ID, 'el_news_preview'); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
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
                <?php $advantages = carbon_get_post_meta($post->ID, 'el_home_advantages'); ?>

                <?php foreach ($advantages as $item): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5 mt-sm-5 mt-md-0 mt-lg-4">
                    <div class="adv-item d-flex flex-column align-items-center">
                        <img class="pt-3" src="<?php echo $item['photo']; ?>" alt="Преимущество обучения на кафедре информатики ВТ">
                        <div class="p-3">
                            <h2 class="roboto22md t-transf-cap text-center"><?php echo $item['title']; ?></h2>
                            <p class="roboto16 pt-2 text-center"><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
                <?php
                $args = array(
                    'post_type' => 'best-students',
                    'posts_per_page' => 0,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="thebest-container pt-5 pb-5">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                    <a class="d-block mt-3" href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>SHORT DESCRIPTION</p>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
