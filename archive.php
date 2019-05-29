<?php get_header(); ?>

<main>
    <div class="container-fluid">
        <div class="text-center my-5">
            <h1 class="title">Альбом</h1>
            <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-12 row no-gutters">
                <?php if ( have_posts() ) : ?>
                    <?php
                    while ( have_posts() ) :
                        the_post();?>

                        <a class="col-lg-4 col-md-6 d-flex justify-content-center" data-fancybox="gallery" href="<?php echo carbon_get_post_meta($post->ID, 'el_album_image'); ?>">
                            <div style="background-image: url('<?php the_post_thumbnail_url(); ?>');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                    <?php endwhile;?>
                <?php endif; ?>
            </div>
            <aside class="d-flex flex-column col-lg-2 justify-content-start align-items-center align-items-xl-start mb-2 mb-lg-0">
                <div class="mt-2 mb-2 alboomCategory recent-posts">
                    <h3>Категории</h3>
                    <?php $terms = get_terms([
                        'taxonomy' => 'tags',
                        'hide_empty' => true,
                        'orderby'       => 'id',
                        'order'         => 'ASC',
                        'get'           => '',
                    ]) ?>
                    <?php foreach($terms as $term): ?>
                        <a href="<?php echo get_term_link($term->term_id, 'tags'); ?>"><?php echo $term->name; ?></a>
                    <?php endforeach; ?>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>
