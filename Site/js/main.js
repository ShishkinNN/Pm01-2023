$(document).ready(function () {

    $("a[rel^='prettyPhoto']").each(function () {
        $(this).prepend('<div class="zoom">');
    });

    if (!$(".box_right > *").length) {
        $(".box_right").remove();
        $(".box_about").css({
            float: 'none',
            width: '100%'
        });

    }

    (function () {
        var a = $(".box_about").height(),
                b = $(".box_right").height();

        if (a > b)
            $(".box_right").height(a);
        else
            $(".box_about").height(b);

    })();

    if ($(".pp-order").length) {
        $('.pp-order').click(function (e) {
            e.stopPropagation();
        });

        $('.order-btn').click(function (e) {
            e.stopPropagation();

            centralize($('.pp-order'));
        });
    } else {
        $(".order-btn").remove();
    }

    $(".nav .nav__popup").each(function () {
        $(this).parents(".nav__item").addClass('nav__item_pp');
    });

    $(document).add('.pp-order .btn_close').click(function () {
        $('.pp-order').fadeOut('fast');
    });




    $(window).scroll(function () {
        if ($(this).width() < 1220) {
            $('.header').css({
                left: -$(this).scrollLeft()
            });
        } else {
            $('.header').css({
                left: 0
            });
        }
    });


    $('.pics__mini').click(function (e) {
        e.preventDefault();
        
        //$('.pics__big__img').attr('src', $(this).attr('href'));
        //$('.pics__big').attr('href', $(this).attr('data-big'));
        
        $(".pics__big").hide();
        $(".pics__big[data-id='"+$(this).attr('data-id')+"']").show();
    });





    if (!$(".aside-info > *").length) {
        $(".aside-info").remove();
        $(".info").css({
            float: 'none',
            width: '100%'
        });
    }
    
    if (!$(".wrap__right > *").length) {
        $(".wrap__right").remove();
        $(".wrap__left").css({
            float: 'none',
            width: '100%'
        });
    }

    var max_height_box = 0;
    $('.p-box .p-box__item').each(function () {

        if ($(this).outerHeight() > max_height_box)
            max_height_box = $(this).outerHeight();

    });

    $('.p-box .p-box__item .p-box__item__unit').outerHeight(max_height_box - 182);

    if (!$('.header .tel > *').length) {
        $('.header .tel').remove();
        $('.header .nav').width(772);
    }

    setTimeout(function () {
        
        var h = $("header").height();
        //if(h == 122) h = 71; // ???
        
        $('#wrapper').css({
            'padding-top': h + 'px',
            'padding-bottom': ($('.footer').outerHeight() + 40) + 'px'
        });

        $(".basket").height(h);
        $(".basket__link").css('line-height', h + 'px');
    },1000);
    



});

// функция центрирует по высоте передоваемый ей элемент и показывает его
function centralize(elem) {
    elem.add('.popups').fadeIn('fast');
    var diff = ($(window).height() - elem.outerHeight());

    if (diff < 0)
        diff = 20;

    var elem_top = $(document).scrollTop() + (diff / 2);
    elem.css('top', elem_top);
}
;