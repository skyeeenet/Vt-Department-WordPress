<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
<main>
    <?php if ( have_posts() ) : ?>
    <?php
    while ( have_posts() ) :
    the_post();?>
    <section>
        <div class="container">
            <div class="text-center mb-5 mt-4">
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <?php endwhile;?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
