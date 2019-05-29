<?php
/*
Template Name: Графики и планы
*/
?>
<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="text-center mt-5">
                <h1 class="title">Графики и планы</h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <h3 class="sub-title text-center mt-5 mb-3 my-lg-5">График работы</h3>
            <table class="table roboto18lt text-center">
                <tbody>
                <tr>
                    <td>1 Аттестация</td>
                    <td><?php echo carbon_get_post_meta($post->ID, 'el_plane_first'); ?></td>
                </tr>
                <tr>
                    <td>2 Аттестация</td>
                    <td><?php echo carbon_get_post_meta($post->ID, 'el_plane_second'); ?></td>
                </tr>
                <tr>
                    <td>Сессия</td>
                    <td><?php echo carbon_get_post_meta($post->ID, 'el_plane_session'); ?></td>
                </tr>
                <tr>
                    <td>Каникулы</td>
                    <td><?php echo carbon_get_post_meta($post->ID, 'el_plane_rest'); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section>
        <div class="container mt-5 mb-5">
            <h3 class="sub-title">Планы</h3>
            <div class="row d-flex flex-column align-items-center">
                <div class="col-md-8">
                    <div class="row">
                        <?php $planes = carbon_get_post_meta($post->ID, 'el_plane_planes'); ?>
                        <?php foreach ($planes as $plane): ?>
                            <a class="d-block col-md-3 download-link text-center" href="<?php echo $plane['file']; ?>" download><?php echo $plane['group']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
