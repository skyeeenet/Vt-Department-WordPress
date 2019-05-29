<?php
/*
Template Name: О кафедре
*/
?>
<?php get_header(); ?>

<main>
    <section>
        <div class="container mt-3">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="text-center">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="col-12 p-0 roboto18lt col-md-10 mb-2 mt-4">

                    <?php echo carbon_get_post_meta($post->ID, 'el_about_upper_text'); ?>

                        <?php echo do_shortcode('[metaslider id="93"]'); ?>

                    <?php echo carbon_get_post_meta($post->ID, 'el_about_lower_text'); ?>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center mt-5">
                <h2 class="title_second">Специальности</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-5">
                <?php
                $args = array(
                    'post_type' => 'specialty',
                    'posts_per_page' => 3,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 text-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Специальность">
                    <div class="roboto24 mt-4"><?php the_title(); ?></div>
                    <div class="roboto16">
                        <?php echo carbon_get_post_meta($post->ID, 'el_specialty_preview'); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="someBlockButton mt-3">
                            Подробнее
                        </div>
                    </a>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="w-100 d-flex flex-column align-items-center mt-5">
                <h2 class="title_second">Поступление</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="offset-1 mt-5">
                <p class="roboto16">График работы <?php echo carbon_get_post_meta($post->ID, 'el_about_terms'); ?></p>
                <p class="someHeadText">Нормативные документы:</p>
                <?php $documents = carbon_get_post_meta($post->ID, 'el_about_documents'); ?>
                <?php foreach ($documents as $item): ?>
                    <div><a href="<?php echo $item['file']; ?>"><?php echo $item['title']; ?></a></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <div class="w-100 d-flex flex-column align-items-center mt-5">
                    <h2 class="title_second text-center">Трудоустройство учащихся</h2>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <img class="scaleSomeImage my-5" src="<?php echo carbon_get_post_meta($post->ID, 'el_about_info'); ?>" alt="Трудостройство учащихся">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
