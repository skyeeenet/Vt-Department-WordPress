function test(){var e="desktop";$(window).on("load resize",function(){var n="desktop",i=$("#site-header-inner .wrap-inner"),a=$(".nav-extend.active"),t=$(".nav-extend.active").children();matchMedia("only screen and (max-width: 991px)").matches&&(n="mobile"),n!=e&&(e=n,"mobile"===n?$("#main-nav").attr("id","main-nav-mobi").appendTo("#site-header").hide().children(".menu").append(t).find("li:has(ul)").children("ul").removeAttr("style").hide().before('<span class="arrow"></span>'):($("body").is(".header-style-3")&&(i=$(".site-navigation-wrap .inner")),$("#main-nav-mobi").attr("id","main-nav").removeAttr("style").prependTo(i).find(".ext").appendTo(a).parent().siblings("#main-nav").find(".sub-menu").removeAttr("style").prev().remove(),$(".mobile-button").removeClass("active")))}),$(document).on("click",".mobile-button",function(){$(this).toggleClass("active"),$("#main-nav-mobi").slideToggle()}),$(document).on("click","#main-nav-mobi .arrow",function(){$(this).toggleClass("active").next().slideToggle()})}test();
$(function () {

    setInterval(function () {
        $('#not-found').fadeToggle(800);
    },100);

});