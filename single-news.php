<?php
get_header();
?>
    <main>
        <section>
            <div class="container">
                <div class="text-center my-5">
                    <h2 class="title">Новости</h2>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-3 mx-md-0 col-lg-12 col-md-12 d-flex justify-content-center">

                        <?php if ( have_posts() ) : ?>

                            <div class="row news-post mb-5">
                                <?php

                                while ( have_posts() ) :
                                    the_post();?>
                                    <div class="news-post-inner">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">

                                            <h1 class="second-title mt-2"><?php the_title(); ?></h1>

                                        <div class="d-md-block d-flex flex-column">
                                            <span class="span-with-line mr-3">Дата: <span class="color_cont"><?php the_time("d M Y"); ?></span></span>
                                            <span class="ml-md-3 ml-0">Автор: <span class="color_cont"><?php the_author(); ?></span></span>
                                        </div>
                                        <p class="roboto16 mt-3">
                                            <?php the_content(); ?>
                                        </p>
                                    </div>
                                <?php endwhile;?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
<?php

get_footer();
