<?php
get_header();
?>
    <main>
        <section>
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="title">Новости</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-3 mx-md-0 col-lg-8 col-md-12">

                        <?php if ( have_posts() ) : ?>

                            <div class="row news-post mb-5">
                                <?php
                                while ( have_posts() ) :
                                    the_post();?>
                                    <div class="news-post-inner">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                        <a href="<?php the_permalink(); ?>">
                                            <h2 class="link second-title"><?php the_title(); ?></h2>
                                        </a>
                                        <div class="d-md-block d-flex flex-column">
                                            <span class="span-with-line mr-3">Дата: <span class="color_cont"><?php the_time("d M Y"); ?></span></span>
                                            <span class="ml-md-3 ml-0">Автор: <span class="color_cont"><?php the_author(); ?></span></span>
                                        </div>
                                        <p class="roboto16 mt-3">
                                            <?php echo carbon_get_post_meta($post->ID, 'el_news_preview'); ?>
                                        </p>
                                    </div>
                                <?php endwhile;?>
                            </div>
                        <?php endif; ?>
                        <div class="my-5 pagination">
                            <?php the_posts_pagination(array(
                                'prev_text'    => __('<'),
                                'next_text'    => __('>'),
                            )); ?>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-12 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0">
                        <div class="d-none d-lg-block">
                            <?php get_search_form(); ?>
                        </div>
                        <?php if (is_active_sidebar('right_sidebar')) : ?>
                            <?php dynamic_sidebar('right_sidebar'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php

get_footer();
