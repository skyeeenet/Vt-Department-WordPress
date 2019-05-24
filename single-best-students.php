<?php get_header(); ?>

    <main>
        <div class="container mt-3">
            <div class="text-center">
                <h1 class="title">
                    Интервью
                </h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>

            <?php the_post(); ?>

            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" class="mt-5">
                <div class="nameText mt-4 mb-2 roboto24bd">
                    <?php the_title(); ?>
                </div>
            </div>
            <div class="row mx-lg-0">
                <div class="col-12 offset-0 col-lg-10 offset-lg-1 roboto18lt">
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- /.d-flex flex-column justify-content-center align-items-center -->
        </div>
        <!-- /.container -->
    </main>

<?php get_footer(); ?>