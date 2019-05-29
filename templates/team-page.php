<?php
/*
Template Name: Состав кафедры
*/
?>
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="text-center mb-5 mt-4">
                <h1 class="title">
                    Колектив
                </h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'posts_per_page' => 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categories',
                            'field' => 'slug',
                            'terms' => 'zavedujushhij-kafedry'
                        )
                    )
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="teacher col-md-12 d-flex flex-column align-items-center justify-content-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Заведующий кафедры ВТ">
                    <div class="d-flex flex-column text-center align-items-center mt-3">
                        <strong><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a></strong>
                        <strong><?php echo carbon_get_post_meta($post->ID, 'el_team_duty'); ?></strong>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <div class="row mt-5">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'posts_per_page' => 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'tags',
                            'field' => 'slug',
                            'terms' => 'zavedujushhij-kafedry',
                            'operator' => 'NOT IN'
                        )
                    )
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="teacher col-lg-4 col-md-6 col-12 mt-3 d-flex flex-column align-items-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <a class="mt-3" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <p><?php echo carbon_get_post_meta($post->ID, 'el_team_duty'); ?></p>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
