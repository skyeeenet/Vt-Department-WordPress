<?php
get_header(); ?>


    <main>
        <section>
            <div class="container">
                <?php if ( have_posts() ) : ?>
                    <div class="text-center my-5">
                        <h1 class="title"><?php if(the_field('h1') != "") the_field('h1'); else the_title();  ?></h1>
                        <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mx-3 mx-md-0 d-flex justify-content-center">

                            <?php
                            while ( have_posts() ) :
                                the_post();?>
                                <div class="row mt-4 flex-column align-items-center">
                                    <h2 class="roboto18lt"><?php the_content(); ?></h2>
                                    <div class="roboto14md d-flex mt-2">
                                        <p> Дата: <span><?php the_time("d M Y"); ?></span></p>
                                        <p class="ml-4">Автор: <span><?php the_author(); ?></span></p>
                                    </div>
                                </div>
                            <?php endwhile;?>

                            <div class="row d-flex justify-content-center my-5">
                                <?php the_posts_pagination(array(
                                    'prev_text'    => __('<'),
                                    'next_text'    => __('>'),
                                )); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>

<?php
get_footer(); ?>