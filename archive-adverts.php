<?php
get_header(); ?>


    <main>
        <section>
            <div class="container">
<?php if ( have_posts() ) : ?>
                <div class="text-center my-5">
                    <h1 class="title">Объявления</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-3 mx-md-0">

                        <?php
                        while ( have_posts() ) :
                            the_post();?>
                        <div class="row mt-4 flex-column">
                            <a class="second-text" href="<?php the_permalink() ?>"><h2 class="roboto18lt"><?php the_content(); ?></h2></a>
                            <div class="roboto14md d-flex mt-2">
                                <p> Дата: <span><?php the_time("d M Y"); ?></span></p>
                                <p class="ml-4">Автор: <span><?php the_author(); ?></span></p>
                            </div>
                        </div>
                        <?php endwhile;?>

                        <div class="my-5 pagination">
                            <?php the_posts_pagination(array(
                                'prev_text'    => __('<'),
                                'next_text'    => __('>'),
                            )); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0">
                        <div>
                            <?php get_search_form(); ?>
                        </div>
                        <?php if (is_active_sidebar('right_sidebar')) : ?>
                            <?php dynamic_sidebar('right_sidebar'); ?>
                        <?php endif; ?>
                    </div>
                </div>
<?php endif; ?>
            </div>
        </section>
    </main>

<?php
get_footer(); ?>