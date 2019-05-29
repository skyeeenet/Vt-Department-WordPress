<?php
/*
Template Name: История кафедры
*/
?>
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="d-flex flex-column align-items-center mb-5 mt-5 mt-lg-0">
                <div class="text-center">
                    <h1 class="title mt-4">История кафедры</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="d-flex w-100 flex-column justify-content-center align-items-center d-lg-block mt-5">
                    <div class="float-none float-lg-right mb-5 mb-lg-0 mx-3"><img src="../images/history.png" alt=""></div>
                    <p class="roboto16lt">
                        <?php if ( have_posts() ) : ?>

                            <?php while ( have_posts() ) : the_post();?>

                                <?php the_content(); ?>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="history_slick">
                <?php $slides = carbon_get_post_meta($post->ID, 'el_history_slides'); ?>
                <?php foreach ($slides as $slide): ?>
                    <div class="d-flex justify-content-center"><img src="<?php echo $slide['image']; ?>" alt="Технологии, которые мы изучаем"></div>
                <?php endforeach; ?>
            </div>
            <div class="d-flex flex-column align-items-center mb-5 mt-5">
                <p class="roboto16lt">
                    <?php echo carbon_get_post_meta($post->ID, 'el_history_lower'); ?>
                </p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
