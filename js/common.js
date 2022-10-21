jQuery(function($){

    $('label[for=gNavTrigger]').click(function(){
        if($('input#gNavTrigger').prop('checked') == true){
            $('body').removeClass('opengNav');
        }else{
            $('body').addClass('opengNav');
        }
    });

    //sp gNav
    $('#btngNav').click(function () {
        $('#gNav ul').stop().slideToggle('fast');
    });
    var menuBtn = $('#header a.menu-trigger');
    menuBtn.on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('#gNav').removeClass('active');
            $('body').removeClass('activeNav');
            $('html').removeClass('activeNav');
        } else {
            $(this).addClass('active');
            $('#gNav').addClass('active');
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
