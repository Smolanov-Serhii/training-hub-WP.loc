$( document ).ready(function() {

    var wow = new WOW(
        {
            boxClass:     'wow',      // класс, скрывающий элемент до момента отображения на экране (по умолчанию, wow)
            animateClass: 'animated', // класс для анимации элемента (по умолчанию, animated)
            offset:       0,          // расстояние в пикселях от нижнего края браузера до верхней границы элемента, необходимое для начала анимации (по умолчанию, 0)
            mobile:       true,       // включение/отключение WOW.js на мобильных устройствах (по умолчанию, включено)
            live:         true,       // поддержка асинхронно загруженных элементов (по умолчанию, включена)
            callback:     function(box) {
                // функция срабатывает каждый раз при старте анимации
                // аргумент box — элемент, для которого была запущена анимация
            },
            scrollContainer: null // селектор прокручивающегося контейнера (опционально, по умолчанию, window)
        }
    );
    wow.init();

    if ($('.recall').length){
        $('.recall .recall__item').each(function() {
            $(this).click(function () {
                $(this).clone(true).appendTo('.modal-recall__content');
                $('.modal-recall').fadeIn(300);
            });
        });

        $('.modal-recall__close').click(function () {
            $('.modal-recall').fadeOut(300);
            setTimeout(function () {
                $('.modal-recall__wrapper .recall__item').remove();
            }, 300)
        });
    }

});
jQuery(document).ready(function($) {

        jQuery(function($){
            $(document).mouseup(function (e){ // событие клика по веб-документу
                var div = $("#popup"); // тут указываем ID элемента
                if (!div.is(e.target) // если клик был не по нашему блоку
                    && div.has(e.target).length === 0) { // и не по его дочерним элементам
                    if ($('.modal-recall__wrapper .recall__item').length){
                        $('.modal-recall').fadeOut(300);
                        setTimeout(function () {
                            $('.modal-recall__wrapper .recall__item').remove();
                        }, 300)
                    }
                }
            });
        });
        $(document).on('click', '.primary-menu__burger', function () {

                $('.primary-menu__wrapper').css("display", "flex")
                    .hide()
                    .fadeIn();
                $('.primary-menu__fade').fadeToggle(300);
                $('body').toggleClass('locked');
        });
        $(document).on('click', '.menu-header__close', function () {

            $('.primary-menu__wrapper').css("display", "none")
            $('.primary-menu__fade').fadeToggle(300);
            $('body').toggleClass('locked');
        });

        if ($('.acardeon__item').length){
            $('.acardeon__item').click(function () {
                $('.acardeon__item').removeClass('active');
                $(this).addClass('active');
            });
        }
        // if ($('.acardeon__item').length){
        //
        // }
        if ($('.modal-contact__close').length){
            $('.modal-contact__close').click(function () {
                $('.modal-contact').fadeOut(300);
            });
        }
        if ($('.contact-section__btn').length){
            $('.contact-section__btn, .get-contact-form').click(function () {
                $('.modal-contact').fadeIn(300);
            });
        }
        if ($('.header-slider__list').length){
            $('.header-slider__list').slick({
                dots: true,
                infinite: true,
                speed: 300,
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                fade: true,
                touchMove: true,
                // prevArrow: $('.nav_icon_prev'),
                // nextArrow: $('.nav_icon_next'),
                swipe: true,
                autoplay: true,
                autoplaySpeed: 4000,
                adaptiveHeight: false
            });
        }


        if ($('.events-galery__list').length){
            $('.events-galery__list').slick({
                dots: false,
                infinite: true,
                speed: 300,
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                draggable: true,
                touchMove: true,
                prevArrow: $('.events-galery__prev'),
                nextArrow: $('.events-galery__next'),
                swipe: true,
                autoplay: true,
                autoplaySpeed: 4000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }

        if ($('.recall__list').length){
            $('.recall__list').slick({
                dots: false,
                infinite: true,
                speed: 300,
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                draggable: true,
                touchMove: true,
                prevArrow: $('.recall__prev'),
                nextArrow: $('.recall__next'),
                swipe: true,
                autoplay: true,
                autoplaySpeed: 4000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }

        if ($('.round-counter').length){
            var block_show = false;

            function scrollTracking(){
                if (block_show) {
                    return false;
                }

                var wt = $(window).scrollTop();
                var wh = $(window).height();
                var et = $('.round-counter').offset().top;
                var eh = $('.round-counter').outerHeight();
                var dh = $(document).height();

                if (wt + wh >= et + wh * 0.2 || wh + wt == dh + wh * 0.2 || eh + et < wh){
                    block_show = true;

                    // Код анимации
                    $('.round-counter').each(function() {
                        var datavalue = $(this).data('value');
                        var datacolor = $(this).data('color');
                        var datavaluedop = datavalue * 0.2;
                        var datavaluepart = (datavalue - datavaluedop)/ 100;
                        var ctx = $(this).get(0).getContext('2d');
                        var al = 0; // amount loaded
                        var start = 4.72; // circle start point. start on at 12 o'clock position
                        var cw = ctx.canvas.width;
                        var ch = ctx.canvas.height -25;
                        var diff;
                        function progressSim() {
                            diff = ((al / (datavalue + datavaluedop)) * Math.PI*2*10).toFixed(2);
                            ctx.clearRect(0, 0, cw, ch);
                            ctx.lineWidth = 10;
                            ctx.fillStyle = '#' + datacolor + '';
                            ctx.strokeStyle = '#' + datacolor + '';
                            ctx.textAlign = 'center';
                            ctx.fontWeight = 'bold';
                            ctx.font = '50px Roboto, sans-serif';
                            ctx.fillText(Math.ceil(al) + '+', cw*0.5, ch*0.5+11, cw);
                            ctx.beginPath();
                            ctx.arc(120, 120, 116, start, diff/10+start, false);
                            ctx.stroke();
                            al = al + datavaluepart; // increment amount loadet +1 every 50sec
                            if(al > datavalue) {
                                clearTimeout(sim);
                                // Pregress copmlete

                            }
                        }
                        var sim = setInterval(progressSim, 40);
                    });
                }
            }
            $(window).scroll(function(){
                scrollTracking();
            });

            $(document).ready(function(){
                scrollTracking();
            });
        }
        if ($('.events').length){
            $('.events__slide').slick({
                dots: false,
                infinite: false,
                speed: 300,
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                draggable: false,
                fade: true
            });
            $('.events__select-list').slick({
                dots: false,
                infinite: false,
                speed: 300,
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: false,
                fade: false,
                touchMove: false,
                swipe: false
            });
            $('.events__select-list .slick-slide').on('click', function(){
                $('.events__select-list .slick-slide').removeClass('slick-current');
                $(this).addClass('slick-current');
                var sliderIndex = $(this).index();
                console.log(sliderIndex);
                $('.events__slide').slick('slickGoTo', sliderIndex);
            });
        }

            if(window.innerWidth > 768) {
                if ($('.traning-days').length){
                    $('.traning-days__slide').slick({
                        centerMode: true,
                        centerPadding: '60px',
                        slidesToShow: 3,
                        arrows: true,
                        infinite: false,
                        variableWidth: true,
                        dots: false,
                        prevArrow: $('.traning-days__nav-prew'),
                        nextArrow: $('.traning-days__nav-next')
                    });
                }
            }

        if ($('.sertificate-people__list').length){
            $('.sertificate-people__list').slick({
                centerMode: false,
                slidesToShow: 1,
                arrows: false,
                infinite: true,
                fade: true,
                dots: true
            });
        }
    });







