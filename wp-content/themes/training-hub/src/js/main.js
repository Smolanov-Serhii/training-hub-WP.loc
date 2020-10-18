    jQuery(document).ready(function($) {
        if ($('.recall__item').length){
            $('.recall__item').click(function () {
                $(this).clone(true)               // сделаем копию элемента hello
                    .appendTo(".modal-recall__content");
                $('.modal-recall').fadeIn(300);
            });
            $('.modal-recall__close').click(function () {
                $('.modal-recall').fadeOut(300);
                setTimeout(function () {
                    $('.modal-recall__wrapper .recall__item').remove();
                }, 300)
            });

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

        }
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
            $('.contact-section__btn').click(function () {
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
                            ctx.arc(135, 135, 120, start, diff/10+start, false);
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
                swipe: false,
            });
            $('.events__select-list .slick-slide').on('click', function(){
                $('.events__select-list .slick-slide').removeClass('slick-current');
                $(this).addClass('slick-current');
                var sliderIndex = $(this).index();
                console.log(sliderIndex);
                $('.events__slide').slick('slickGoTo', sliderIndex);
            });
        }
    });







