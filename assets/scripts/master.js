jQuery( document ).ready(function($) {
    /* Make all External Links and PDF's open in a new Tab */
    // var host = new RegExp('/' + window.location.host + '/');
    // $('a').each(function() {
	//     if ((!host.test(this.href) && this.href.slice(0, 1) != "/" && this.href.slice(0, 1) != "#" && this.href.slice(0, 1) != "?") || this.href.indexOf('.pdf') > 0) {
	// 	    $(this).attr({'target': '_blank'});
	//     }
	// });
	// $('.toggle').click(function(e) {
	//   e.preventDefault();
	//   var $this = $(this);
	//   if ($this.next().hasClass('show')) {s
	//       $this.next().removeClass('show');
	//       $this.next().slideUp(350);
	//   } else {
	//       $this.parent().parent().find('li .inner').removeClass('show');
	//       $this.parent().parent().find('li .inner').slideUp(350);
	//       $this.next().toggleClass('show');
	//       $this.next().slideToggle(350);
	//   }
	// });

    jQuery('ul#menu-main-menu').superfish();
    jQuery('ul.sf-menu').superfish('destroy');

    // jQuery('ul#menu-main-menu-1').slicknav();
    // jQuery('.slicknav_btn').appendTo('.mobile-menu-container');
    // jQuery('.slicknav_btn').on('click', function(event) {
    //     event.stopImmediatePropagation();
    // })
    // jQuery('.slicknav_menu').on('click', function(event) {
    //     event.stopImmediatePropagation();
    // })
    // jQuery(document).on("mousedown, touchstart, click",function(event){
    //     if(jQuery('.slicknav_btn').hasClass('slicknav_open')) {
    //         jQuery('ul#menu-main-menu-1').slicknav('close');
    //     }
    // });
});
jQuery( window ).on( "load", function($) {

});
