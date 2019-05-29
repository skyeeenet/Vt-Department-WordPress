<?php


?>
<footer>
    <div class="vit_footer_container margin-top">
        <div class="container pt-5 vit_footer_container">
            <div class="row">
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="nav w-100 flex-column align-items-center">
                        <p class="vit_foot_main_text p-0">Разработчики</p>
                        <a href="https://www.facebook.com/sergei.tilinin">Тилинин Сергей</a>
                        <a href="">Клычков Виталий</a>
                        <a href="">Симон Николай</a>
                        <a href="">Крутиков Владислав</a>
                        <a href="">Григорьев Владимир</a>
                    </div>
                    <small id="week_offset" style="display: none;"><?php echo carbon_get_theme_option('el_week') ?></small>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0 d-flex justify-content-center">
                    <div class="nav w-100 flex-column align-items-center">
                        <p class="vit_foot_main_text text-center">Контакты</p>
                        <div class="mt-md-0 mt-md-0 "><img src="<?php echo get_template_directory_uri().'/assets/images/placeholder.svg'; ?>" height="20px" width="20px" alt="City"><span class="pl-2 color_cont"><?php echo carbon_get_theme_option('el_address') ?></span></div>
                        <div class="pt-2 mt-md-0"><img src="<?php echo get_template_directory_uri().'/assets/images/email.svg'; ?>" height="20px" width="20px" alt="Mail"><span class="pl-2 color_cont"><?php echo carbon_get_theme_option('el_email') ?></span></div>
                        <div class="mt-md-0 mt-md-0 pt-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/support.svg" height="20px" width="20px" alt="Support"><button class="no-btn" type="button" data-toggle="modal" data-target="#exampleModal"><span class="pl-2 color_cont">Обратная связь</span></button></div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0 d-flex justify-content-center">
                    <?php get_search_form(); ?>
                </div>
            </div>

        </div>
        <div class="text-center pt-4 pb-3 text-secondary roboto16">
            <?php echo carbon_get_theme_option('el_footer_rights') ?> <a
                    href="<?php echo carbon_get_theme_option('el_footer_team_url') ?>"><?php echo carbon_get_theme_option('el_footer_team') ?></a>
        </div>
    </div>
</footer>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Обратная связь</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="182" title="Обратная связь"]'); ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
