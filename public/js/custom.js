jQuery(function ($) {
    $(".hotel_main_photo").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".hotel_sub_photos",
        swipe: false,
        draggable: false,
    });
    $(".hotel_sub_photos").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: ".hotel_main_photo",
        arrows: false,
        // dots0: true,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 4,
                },
            },
        ],
    });

    $(".recent_hotels_slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: $(".prev_arr"),
        nextArrow: $(".next_arr"),
        responsive: [
            {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    prevArrow: $(".mob_prev_arr"),
                    nextArrow: $(".mob_next_arr"),
                    slidesToShow: 1,
                },
            },
        ],
    });
    if ($(window).width() < 993) {
        $(".hotel_reviews_wrap").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
        });
    }
    if ($(window).width() < 576) {
        $("#hidden_description").addClass("collapse");
    }

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
