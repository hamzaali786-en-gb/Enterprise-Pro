(function ($) {
    "use strict";

    // metisMenu 
    $("#sidebar_menu").metisMenu();
    // metisMenu 
    $("#admin_profile_active").metisMenu();

    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $('#back-top').fadeOut(500);
        } else {
            $('#back-top').fadeIn(500);
        }
    });

    // back to top 
    $('#back-top a').on("click", function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });


    // PAGE ACTIVE 
    $("#sidebar_menu").find("a").removeClass("active");
    $("#sidebar_menu").find("li").removeClass("mm-active");
    $("#sidebar_menu").find("li ul").removeClass("mm-show");

    var current = window.location.pathname
    $("#sidebar_menu >li a").filter(function () {

        var link = $(this).attr("href");
        if (link) {
            if (current.indexOf(link) != -1) {
                $(this).parents().parents().children('ul.mm-collapse').addClass('mm-show').closest('li').addClass('mm-active');
                $(this).addClass('active');
                return false;
            }
        }
    });


    //count up js
    var count = $('.counter');
    if (count.length) {
        count.counterUp({
            delay: 100,
            time: 5000
        });
    }

 //active sidebar
    $('.sidebar_icon').on('click', function(){
        $('.sidebar').toggleClass('active_sidebar');
    });
    $('.sidebar_close_icon i').on('click', function(){
        $('.sidebar').removeClass('active_sidebar');
    });
    
    //active menu
    $('.troggle_icon').on('click', function(){
        $('.setting_navbar_bar').toggleClass('active_menu');
    });

    
    $(document).click(function (event) {
        if (!$(event.target).closest(".custom_select").length) {
            $("body").find(".custom_select").removeClass("active");
        }
    });
    //remove sidebar
    $(document).click(function (event) {
        if (!$(event.target).closest(".sidebar_icon, .sidebar").length) {
            $("body").find(".sidebar").removeClass("active_sidebar");
        }
    });

    //custom file
    $('.input-file').each(function () {
        var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();

        $input.on('change', function (element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
        });
    });

    //custom file
    $('.input-file2').each(function () {
        var $input = $(this),
            $label = $input.next('.js-labelFile1'),
            labelVal = $label.html();

        $input.on('change', function (element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName1').html(fileName) : $label.removeClass('has-file').html(labelVal);
        });
    });

    // meta_keywords 
    var bootstrapTag = $("#meta_keywords");
    if (bootstrapTag.length) {
        bootstrapTag.tagsinput();
    }
}(jQuery));