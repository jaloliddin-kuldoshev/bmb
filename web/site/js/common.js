function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$(document).ready(function () {
    $('.bmb_top_slider_wrap').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000
    });
    $('.bmb_about_slider_img').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.bmb_about_slider_texts'
    });
    $('.bmb_about_slider_texts').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.bmb_about_slider_img',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        prevArrow: '<div class="slick-button-left"><span class="fa fa-angle-left"></span><span class="sr-only">Prev</span></div>',

        nextArrow: '<div class="slick-button-right"><span class="fa fa-angle-right"></span><span class="sr-only">Next</span></div>',
    });

    $(".bmb_partners").slick({
        slidesToShow: 4,
        dots: false,
        centerMode: false,
        focusOnSelect: false,
        arrows: false,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

    $(".des-nws-sldr").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        fade: true,
        asNavFor: '.des-nws-sldr-desc'

    });
    $('.des-nws-sldr-desc').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.des-nws-sldr',
        dots: false,
        focusOnSelect: true,
        arrows: false
    });
    $(".des-ab-wrkr-sldr-txt-con").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-button-left"><span class="fa fa-angle-left"></span><span class="sr-only">Prev</span></div>',
        nextArrow: '<div class="slick-button-right"><span class="fa fa-angle-right"></span><span class="sr-only">Next</span></div>',
        asNavFor: '.des-ab-wrkr-sldr-img-wrap'

    });
    $(".des-ab-wrkr-sldr-img-wrap").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.des-ab-wrkr-sldr-txt-con',
        arrows: false
    });
    $(".bmb_header_lang>a").on("click", function () {
        $(this).next().slideToggle();
    });
    $("a.fancimg").fancybox({
        arrows: true,
        keyboard: true
    })

});



