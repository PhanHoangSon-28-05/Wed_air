(function ($) {
    $(function() {

        // Slick slider for prev/next thumbnails images
        $('.full-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            dots: true,
            infinite: false,
            customPaging : function(slider, i) {
                var title = $(slider.$slides[i]).find('.slider-image').data('title');
                return '<a class="pager__item"> ' + title + ' </a>';
            },
        });
        setTimeout(function() {
            $('.slick-prev').prepend('<div class="prev-slick-img slick-thumb-nav"></div>');
            $('.slick-next').append('<div class="next-slick-img slick-thumb-nav"></div>');
            get_prev_slick_img();
            get_next_slick_img();
        }, 500);

        $('.full-slider').on('click', '.slick-prev', function() {
            get_prev_slick_img();
        });
        $('.full-slider').on('click', '.slick-next', function() {
            get_next_slick_img();
        });
        $('.full-slider').on('swipe', function(event, slick, direction) {
            if (direction == 'left') {
                get_prev_slick_img();
            }
            else {
                get_next_slick_img();
            }
        });

        $('.slick-dots').on('click', 'li a', function() {
            var li_no = $(this).parent('li').index();
            if ($(this).parent('li').index() > li_no) {
                get_prev_slick_img()
            }
            else {
                get_next_slick_img()
            }
        });
        function get_prev_slick_img() {
            // For prev img
            var prev_slick_img = $('.slick-current').prev('.slick-slide').find('img').attr('src');
            $('.prev-slick-img img').attr('src', prev_slick_img);
            $('.prev-slick-img').css('background-image', 'url(' + prev_slick_img + ')');
            // For next img
            var prev_next_slick_img = $('.slick-current').next('.slick-slide').find('img').attr('src');
            $('.next-slick-img img').attr('src', prev_next_slick_img);
            $('.next-slick-img').css('background-image', 'url(' + prev_next_slick_img + ')');
        }
        function get_next_slick_img() {
            // For next img
            var next_slick_img = $('.slick-current').next('.slick-slide').find('img').attr('src');
            $('.next-slick-img img').attr('src', next_slick_img);
            $('.next-slick-img').css('background-image', 'url(' + next_slick_img + ')');
            // For prev img
            var next_prev_slick_img = $('.slick-current').prev('.slick-slide').find('img').attr('src');
            $('.prev-slick-img img').attr('src', next_prev_slick_img);
            $('.prev-slick-img').css('background-image', 'url(' + next_prev_slick_img + ')');
        }
        // End
    })

    // accordion js
    var contentwidth = jQuery(window).width();
    if ((contentwidth) < '767') {
        jQuery('.privacy-title h6').append('<span class="according-menu"><i class="fas fa-chevron-down"></i></span>');
        jQuery('.privacy-title').click(function () {
            jQuery('.privacy-title').removeClass('active');
            jQuery('.privacy-content').slideUp('normal');
            if (jQuery(this).next().is(':hidden') == true) {
                jQuery(this).addClass('active');
                jQuery(this).find('span').replaceWith('<span class="according-menu"><i class="fas fa-chevron-up"></i></span>');
                jQuery(this).next().slideDown('normal');
            } else {
                jQuery(this).find('span').replaceWith('<span class="according-menu"><i class="fas fa-chevron-down"></i></span>');
            }
        });
        jQuery('.privacy-content').hide();
    } else {
        jQuery('.privacy-content').show();
    }



})(jQuery);
