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


    if (OSName == 'Windows' && browser() == 'Firefox' || OSName == 'Windows' && browser() == 'Edge'){
        var menuWidth = 769;
        $('body').addClass('windows-navigation');
    } else if (OSName == 'Windows' && browser() == 'IE'){
        $('body').addClass('internet-explorer');
    } else {
        var menuWidth = 768;
    }

    $('.mobile-menu-button').on("click",function(e) {
        e.preventDefault();
        $(this).toggleClass("hamburger--open");
        $('#menu-main-menu').slideToggle('medium');
    });

    $("li.menu-item-has-children").each(function() {
         $(this).attr('data-is-click', 'true')
    });

});
