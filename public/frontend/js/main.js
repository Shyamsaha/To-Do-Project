function sideNavOpen() {
    //event.preventDefault();
    $(".rk-left-pan").css({ width: "17%", "margin-left": 0 });
    $(".rk-side-nav").css({ width: "17%", "margin-left": 0 });
    $(".rk-right-pan").css({ width: "83%" });
    $(".rk-right-pan .rk-site-bg-gray-menu").css({ width: "83%" });

    $(".rk-side-menu-open").fadeOut(0).css({ width: "0" });
    //$(".rk-category-sidebar").show(500);
    $(".slide-width").removeClass("w-100");
    //$(".slick-track").removeClass('w-100');
    $(".rk-banner-box").css({ height: "280px", width: "auto" }); // Sub Category Page Banner
    $(".rk-sub-category-title").css({ left: "25px" }); // Sub Category Page Banner
    $(".rk-category-wrapper").css({}); // Category boxes Wrapper TODO
}
function sideNavClose() {
    $(".rk-left-pan").css({ width: 0, "margin-left": "-17%" });
    $(".rk-side-nav").css({ width: 0, "margin-left": "-17%" });
    $(".rk-right-pan").css({ width: "100%" });
    $(".rk-right-pan .rk-site-bg-gray-menu").css({ width: "100%" });
    $(".rk-side-menu-open").fadeIn(1000).css({ width: "20px" });
    //$(".rk-category-sidebar").hide(200);
    $(".slide-width").addClass("w-100");
    //$(".slick-track").addClass('w-100');
    $(".rk-banner-box").css({ height: "auto", width: "100%" }); // Sub Category Page Banner
    $(".rk-sub-category-title").css({ left: "85px" }); // Sub Category Page Banner
    $(".rk-category-wrapper").css({}); // Category boxes Wrapper TODO
}
