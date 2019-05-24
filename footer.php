<?php


?>
<footer>
    <div class="vit_footer_container margin-top">
        <div class="container pt-5 vit_footer_container">
            <div class="row">
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="nav w-100 flex-column align-items-center">
                        <p class="vit_foot_main_text p-0">Разработчики</p>
                        <a href="#">CODE & ORDER</a>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0 d-flex justify-content-center">
                    <div class="nav w-100 flex-column align-items-center">
                        <p class="vit_foot_main_text text-center">Контакты</p>
                        <?php if (is_active_sidebar('footer_sidebar')) : ?>
                            <?php dynamic_sidebar('footer_sidebar'); ?>
                        <?php endif; ?>
                        <div class="mt-md-0 mt-md-0 pt-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/support.svg" height="20px" width="20px" alt="Support"><a href=""><span class="pl-2 color_cont">Обратная связь</span></a></div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0 d-flex justify-content-center">
                    <?php get_search_form(); ?>
                </div>
            </div>

        </div>
        <div class="text-center pt-4 pb-3 text-secondary roboto16">
            Copyright &copy; 2019 All rights reserved. Developed by <a
                    href="https://github.com/devitvt">DevItVt</a>
        </div>
    </div>
</footer>
</div>

</div>
<?php wp_footer(); ?>
</body>
</html>
