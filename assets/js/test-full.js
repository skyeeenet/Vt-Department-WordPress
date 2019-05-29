test();
function test() {
    var menuType = 'desktop';

    $(window).on('load resize', function() {
        var mode = 'desktop';
        var wrapMenu = $('#site-header-inner .wrap-inner');
        var navExtw = $('.nav-extend.active');
        var navExt = $('.nav-extend.active').children();

        if ( matchMedia( 'only screen and (max-width: 991px)' ).matches )
            mode = 'mobile';

        if ( mode != menuType ) {
            menuType = mode;

            if ( mode === 'mobile' ) {
                $('#main-nav').attr('id', 'main-nav-mobi')
                    .appendTo('#site-header')
                    .hide().children('.menu').append(navExt)
                    .find('li:has(ul)')
                    .children('ul')
                    .removeAttr('style')
                    .hide()
                    .before('<span class="arrow"></span>');
            } else {
                if ( $('body').is('.header-style-3') )
                    wrapMenu = $('.site-navigation-wrap .inner');

                $('#main-nav-mobi').attr('id', 'main-nav')
                    .removeAttr('style')
                    .prependTo(wrapMenu)
                    .find('.ext').appendTo(navExtw)
                    .parent().siblings('#main-nav')
                    .find('.sub-menu')
                    .removeAttr('style')
                    .prev().remove();

                $('.mobile-button').removeClass('active');
            }
        }
    });

    $(document).on('click', '.mobile-button', function() {
        $(this).toggleClass('active');
        $('#main-nav-mobi').slideToggle();
    })

    $(document).on('click', '#main-nav-mobi .arrow', function() {
        $(this).toggleClass('active').next().slideToggle();
    })
}