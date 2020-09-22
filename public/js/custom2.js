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

    $("#main_location_select").on("click", function (e) {
        e.preventDefault();
        $(".mobile_hidden_mob_location").toggle();
    });

    $(".header_location .sub-menu li a ").on("click", function (e) {
        e.preventDefault();
        let linkName = $(this).text();

        let linkId = $(this).attr("data-id");
        $(this).attr(
            "data-id",
            $(".header_location .current_location").attr("data-id")
        );
        $(".header_location .current_location").attr("data-id", linkId);

        $(this).text($(".header_location .current_location").text());
        $(".header_location .current_location").text(linkName);
    });

    // ================================ ADD NEW OBJECT ================================

    $("#step1_trigger").on("click", function (e) {
        e.preventDefault();
        let error = '<p class="input_error">Заполните обязательное поле!</p>';
        if (
            $("[data-id='object_step_one_input']").val() &&
            $("[data-id='object_step_two_input']").val() &&
            $("[data-id='object_step_three_input']").val() &&
            $("[data-id='object_step_three_city']").val() &&
            $("[data-id='object_step_three_metro']").val() &&
            $("[data-id='object_step_three_region']").val()
        ) {
            $(".object_step_four").show();
            $(".add_new_category_button_wrap").show();
            $(".add_new_object_bottom_in_progress").hide();
            $(".input_error").hide();
            $(".object_step_input").css("border", "1px solid #4D4D4D");
        } else {
            let inputs = $(".object_step_input");
            for (let i = 0; i < inputs.length; i++) {
                if (!$(inputs)[i].value) {
                    $(inputs)[i].style.border = "2px solid red";
                } else {
                    $(inputs)[i].style.border = "1px solid #4D4D4D";
                }
            }
            $(".input_error").show();
        }
    });

    $(".add_new_category_button").on("click", function () {
        Dropzone.autoDiscover = false;
        let cloned_block = $(".add_new_category_block_pattern")
            .clone()
            .removeClass("add_new_category_block_pattern");
        let id = Date.now();
        $(cloned_block)
            .find(".add_new_category_content")
            .attr("id", `object-${id}`);
        $(cloned_block)
            .find(".category_rooms_photo")
            .attr("id", `object-photo-${id}`);
        $(cloned_block)
            .find(".object_single_category_title")
            .attr("data-target", `#object-${id}`);
        $(cloned_block).appendTo(".add_new_category_block_wrap");
        $(".add_new_object_bottom").show();
        $(".add_new_object_bottom_in_progress").hide();

        $(`#object-photo-${id}`).dropzone({ url: "/" });
    });

    $(document).on("click", ".remove_category", function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().parent().remove();
    });

    $(document).on("click", ".add_price_per_hour", function (e) {
        e.preventDefault();
        let clone = $(this).parent().find(".edit_price_per_room").clone()[0];
        $(clone).insertBefore(this);
    });

    $(document).on(
        "blur",
        ".add_new_category_block .category_title input",
        function () {
            let text = $(this).val();
            if (text) {
                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .find(".object_single_category .title")
                    .text(text);
            }
        }
    );

    // ================================ ADD NEW OBJECT ================================

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
