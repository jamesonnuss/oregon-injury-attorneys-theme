jQuery( document ).ready(function($) {

    var OSName="Unknown OS";
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
    else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
    else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
    else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";

    var browser = function() {
        // Return cached result if avalible, else get result then cache it.
        if (browser.prototype._cachedResult)
            return browser.prototype._cachedResult;

        // Opera 8.0+
        var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

        // Firefox 1.0+
        var isFirefox = typeof InstallTrigger !== 'undefined';

        // Safari 3.0+ "[object HTMLElementConstructor]"
        var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);

        // Internet Explorer 6-11
        var isIE = /*@cc_on!@*/false || !!document.documentMode;

        // Edge 20+
        var isEdge = !isIE && !!window.StyleMedia;

        // Chrome 1+
        var isChrome = !!window.chrome && !!window.chrome.webstore;

        // Blink engine detection
        var isBlink = (isChrome || isOpera) && !!window.CSS;

        return browser.prototype._cachedResult =
            isOpera ? 'Opera' :
            isFirefox ? 'Firefox' :
            isSafari ? 'Safari' :
            isChrome ? 'Chrome' :
            isIE ? 'IE' :
            isEdge ? 'Edge' :
            isBlink ? 'Blink' :
            "Don't know";
    };

    $('.anchor-button').on( "click", function() {
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 800);
        return false;
    })

    var menuWidth = 768;

    function mainMenu(){

        if (OSName == 'Windows' && browser() == 'Firefox' || OSName == 'Windows' && browser() == 'Edge'){
            menuWidth = 769;
            $('body').addClass('windows-navigation');
        }

        if (window.innerWidth > menuWidth) {
            $('ul#menu-main-menu').superfish();
            $("button.menu-icon").removeClass('active-menu');
            console.log('start superfish');
        } else {
            $('ul#menu-main-menu').superfish('hide');
            $('ul#menu-main-menu').find('li.sfHover').removeClass('sfHover');
            $('ul#menu-main-menu').superfish('destroy');
            console.log('destroy superfish');
        }
    }
    $("button.menu-icon").on( "click", function(event) {
        event.stopImmediatePropagation();
        $(this).toggleClass('active-menu');
        $('#menu-main-menu').slideToggle('medium', function() {
            if ($(this).is(':visible'))
                $(this).css('display','flex');
        });
    });

    $("li.menu-item-has-children").each(function() {
         $(this).attr('data-is-click', 'true')
    });

    mainMenu();
	var resizeTimer;
	jQuery(window).on('resize', function(e) {
	    clearTimeout(resizeTimer);
	    var windowsize = jQuery(window).width();
	    resizeTimer = setTimeout(function() {
	           mainMenu();
	    }, 250);
	});
    // function liveChat(){
    //     var headerHeight = $('.content-header').height();
    //     var navHeight = $('header.header').height();
    //     var showPosition = headerHeight + navHeight;
    //     var scrollPosition = window.pageYOffset;
    //     if (scrollPosition >= navHeight) {
    //         $('.live-chat').fadeIn();
    //     } else {
    //         $('.live-chat').fadeOut();
    //     }
    // }
    // liveChat();
    $(window).scroll(function() {
        liveChat();
    });
});
