jQuery(function($){

    //anchorlink
    $('body,html').stop().scrollTop(0);
    const hash = window.location.hash;
    if (hash !== '') {
        window.location.hash = "";
        $(function () {
            $('.lazy').removeClass('lazy');
        });
    }
    (window.onload = function () {
        if (hash !== void 0 && hash !== '') {
            var speed = 600;
            var href = $(this).attr("href");
            var target = $(hash);
            var position = target.offset().top;
            $('body,html').animate({
                scrollTop: position
            }, speed, 'swing');
        }
    })()
    $('a[href^="#"]').click(function () {
        var speed = 600;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });

    //sp gNavi
    $('#btnGnavi').click(function () {
        $('#gNavi ul').stop().slideToggle('fast');
    });
    var menuBtn = $('#header a.menu-trigger');
    menuBtn.on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('#gNavi').removeClass('active');
            $('body').removeClass('activeNav');
            $('html').removeClass('activeNav');
        } else {
            $(this).addClass('active');
            $('#gNavi').addClass('active');
            $('body').addClass('activeNav');
            $('html').addClass('activeNav');
        }
        return false;
    });
    
    // Send event to Google Analytics
    $('a[href^="tel:"]').click(function () {
        var txt = $(this).attr('href');
        var pathName = $(location).attr('pathname');
        // For Global Site Tag
        gtag('event', 'tel', {
            'event_category': 'sp',
            'event_label': txt + ', pageURL:' + pathName
        });
        // For Universal Analytics
        //ga('send', 'event', 'sp', 'tel', txt+', pageURL:'+pathName);
    });
    
    //lazy load
    window.onload = function () {
        init();
        $(window).scroll(lazyFade);
    }
    function init() {
        lazyFade();
    }
    function lazyFade() {
        var scrollTop = $(window).scrollTop();
        var scrollBtm = scrollTop + $(window).height();
        $('.lazy').each(function () {
            var target = $(this);
            var targetTop = target.offset().top;

            if (scrollBtm > targetTop) {
                target.removeClass('lazy');
                target.addClass('lazy-show');
            }
        });
    }
    
});
