$(function(){

    // scripts for "menu-left" module

    /////////////////////////////////////////////////////////////////////////////////////////
    // add backdrop

    $('.cat__menu-left').after('<div class="cat__menu-left__backdrop cat__menu-left__action--backdrop-toggle"><!-- --></div>');

    /////////////////////////////////////////////////////////////////////////////////////////
    // submenu

    $('.cat__menu-left__submenu > a').on('click', function(){

        if ($('body').hasClass('cat__config--vertical') || $('body').width() < 768) {

            var parent = $(this).parent(),
                opened = $('.cat__menu-left__submenu--toggled');

            if (!parent.hasClass('cat__menu-left__submenu--toggled') && !parent.parent().closest('.cat__menu-left__submenu').length)
                opened.removeClass('cat__menu-left__submenu--toggled').find('> .cat__menu-left__list').slideUp(200);

            parent.toggleClass('cat__menu-left__submenu--toggled');
            parent.find('> .cat__menu-left__list').slideToggle(200);

        }

    });

    // remove submenu toggle class when viewport back to full view
    $(window).on('resize', function(){
        if ($('body').hasClass('cat__config--horizontal') || $('body').width() > 768) {
            $('.cat__menu-left__submenu--toggled').removeClass('cat__menu-left__submenu--toggled').find('> .cat__menu-left__list').attr('style', '');
        }
    });


    /////////////////////////////////////////////////////////////////////////////////////////
    // custom scroll init

    if ($('body').hasClass('cat__config--vertical')) {
        if (!(/Mobi/.test(navigator.userAgent)) && jQuery().perfectScrollbar) {

            $('.cat__menu-left__inner').perfectScrollbar({
                theme: 'cleanui'
            });

            /*
            $('.cat__menu-left__inner').each(function () {
                $(this).jScrollPane({
                    contentWidth: '0px',
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                    throttleTimeout;
                $(window).bind('resize', function () {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function () {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            })
            */
        }
        // $('.cat__menu-left__inner').css({overflow: 'auto'});
    }


    /////////////////////////////////////////////////////////////////////////////////////////
    // toggle menu

    $('.cat__menu-left__action--menu-toggle').on('click', function(){
        if ($('body').width() < 768) {
            $('body').toggleClass('cat__menu-left--visible--mobile');
        } else {
            $('body').toggleClass('cat__menu-left--visible');
        }
    })

    $('.cat__menu-left__action--backdrop-toggle').on('click', function(){
        $('body').removeClass('cat__menu-left--visible--mobile');
    })


    /////////////////////////////////////////////////////////////////////////////////////////
    // colorful menu

    var colorfulClasses = 'cat__menu-left--colorful--primary cat__menu-left--colorful--secondary cat__menu-left--colorful--primary cat__menu-left--colorful--default cat__menu-left--colorful--info cat__menu-left--colorful--success cat__menu-left--colorful--warning cat__menu-left--colorful--danger cat__menu-left--colorful--yellow',
        colorfulClassesArray = colorfulClasses.split(' ');

    function setColorfulClasses() {
        $('.cat__menu-left__list--root > .cat__menu-left__item').each(function(){
            var randomClass = colorfulClassesArray[Math.floor(Math.random() * colorfulClassesArray.length)];
            $(this).addClass(randomClass);
        })
    }

    function removeColorfulClasses() {
        $('.cat__menu-left__list--root > .cat__menu-left__item').removeClass(colorfulClasses);
    }

    if ($('body').hasClass('cat__menu-left--colorful')) {
        setColorfulClasses();
    }

    $('body').on('setColorfulClasses', function() {
        setColorfulClasses();
    });

    $('body').on('removeColorfulClasses', function() {
        removeColorfulClasses();
    });


});