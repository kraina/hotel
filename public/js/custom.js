jQuery(function ($) {
    // =================== MOBILE MENU ========================
    $(".button_menu").click(function () {
        $(this).toggleClass("active");
        $("body").toggleClass("active_menu");
        $(".menu_responsive").toggleClass("active");
    });

    $(document).mouseup(function (e) {
        if ($(".menu_responsive").hasClass("active")) {
            var container = $(".menu_responsive");
            if (container.has(e.target).length === 0) {
                $(".button_menu").click();
            }
            if ($(e.target).parent().hasClass("button_menu")) {
                $(".button_menu").click();
            }
            if ($(e.target).hasClass("button_menu")) {
                $(".button_menu").click();
            }
        }
    });
    $(".nav").on("click", function () {
        if ($(".menu_responsive").hasClass("active")) {
            $(".button_menu").click();
        }
    });

    // =================== MOBILE MENU ========================
});
