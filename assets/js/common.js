/**
 * Created by harikrishnan on 1/3/2017.
 */


$( document ).ready(function() {
    $('.scrollup').hide();
    $('#searchtextRight').hide();
    $('#rightLeft li').hide();
    $('#rightLeft').hide();
    $('#rightsearch').hide();
    $("#rightserachCenter").attr('class', 'nav navbar-nav navbar-right secondMenu hidden-xs nopadding col-xs-12');
});
/*var fixmeTop = $('#mainNav').offset().top;
var flipval=0;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('#mainNav').css({
            position: 'fixed',
            top: '0',
            left: '0',width:'100%'
        });
        $("#rightserachCenter").attr('class', 'nav navbar-nav navbar-right secondMenu hidden-xs nopadding col-xs-9');
        $('#rightLeft').show();
        $('#rightLeft li').show();
        $('#rightsearch').show();
    } else {
        var flipval=0;
        $('#mainNav').css({
            position: 'static'
        });
        $("#rightserachCenter").attr('class', 'nav navbar-nav navbar-right secondMenu hidden-xs nopadding col-xs-12');
        $('#rightLeft li').hide();
        $('#rightLeft').hide();
        $('#rightsearch').hide();

    }

});*/

$('#searchicon').click(function () {
    //$( "#navbarDiv" ).replaceWith( "<input type='text' class='searchbox'>" );
    $("#searchicon").hide();
    $('.searchRight').show();

});
$('#searchcloseRight').click(function () {
    //$( "#navbarDiv" ).replaceWith( "<input type='text' class='searchbox'>" );
    // $("#navbarDiv").show();
    $('#searchtextRight').hide();
    $("#searchicon").show();
});
(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
       // alert($anchor.attr('href'));
        var id= $anchor.attr('href');
         $('html, body').stop().animate({

            scrollTop: ($($anchor.attr('href')).offset().top - 100)

        }, 1250, 'easeInOutExpo');
        event.preventDefault();

    });

    // Highlight the top nav as scrolling occurs
     $('body').scrollspy({
     target: '.navbar-fixed-top',
       offset: 58
     });

    // Closes the Responsive Menu on Menu Item Click
    /*$('.navbar-collapse ul li a').click(function(){
       // $('.navbar-toggle:visible').click();
    });*/

    // Offset for Main Navigation
    $('#mainNav').affix({
   offset: {
     top: 100
   }
   })
})(jQuery); // End of use strict
$('.scrollMenu').click(function(){
    $('.scrollMenu').removeClass("shwed");
    $(this).addClass("shwed");
});

$(window).scroll(function(){

    if ($(this).scrollTop() > 200) {

        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});
$('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});







/*REV SLIDER* **********************************************************
* *********************************************************************
* ****************************************************************************/

/******************************************
 -	PREPARE PLACEHOLDER FOR SLIDER	-
 ******************************************/


var setREVStartSize = function() {
    var tpopt = {};
    tpopt.startwidth = 1100;
    tpopt.startheight = 400;
    tpopt.container = jQuery('#rev_slider_1_1');
    tpopt.fullScreen = "off";
    tpopt.forceFullWidth = "on";

    tpopt.container.closest(".rev_slider_wrapper").css({
        height: tpopt.container.height()
    });
    tpopt.width = parseInt(tpopt.container.width(), 0);
    tpopt.height = parseInt(tpopt.container.height(), 0);
    tpopt.bw = tpopt.width / tpopt.startwidth;
    tpopt.bh = tpopt.height / tpopt.startheight;
    if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
    if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
    if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
    if (tpopt.bh > 1) {
        tpopt.bw = 1;
        tpopt.bh = 1
    }
    if (tpopt.bw > 1) {
        tpopt.bw = 1;
        tpopt.bh = 1
    }
    tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
    if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
    if (tpopt.fullScreen == "on") {
        tpopt.height = tpopt.bw * tpopt.startheight;
        var cow = tpopt.container.parent().width();
        var coh = jQuery(window).height();
        if (tpopt.fullScreenOffsetContainer != undefined) {
            try {
                var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                jQuery.each(offcontainers, function(e, t) {
                    coh = coh - jQuery(t).outerHeight(true);
                    if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                })
            } catch (e) {}
        }
        tpopt.container.parent().height(coh);
        tpopt.container.height(coh);
        tpopt.container.closest(".rev_slider_wrapper").height(coh);
        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
        tpopt.container.css({
            height: "100%"
        });
        tpopt.height = coh;
    } else {
        tpopt.container.height(tpopt.height);
        tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
    }
};

/* CALL PLACEHOLDER */
setREVStartSize();


var tpj = jQuery;
//                        tpj.noConflict();
var revapi1;

tpj(document).ready(function() {

    if (tpj('#rev_slider_1_1').revolution == undefined) {
        revslider_showDoubleJqueryError('#rev_slider_1_1');
    } else {
        revapi1 = tpj('#rev_slider_1_1').show().revolution({
            dottedOverlay: "none",
            delay: 4500,
            startwidth: 1100,
            startheight: 400,
            hideThumbs: 200,

            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 4,


            simplifyAll: "on",

            navigationType: "bullet",
            navigationArrows: "solo",
            navigationStyle: "round",

            touchenabled: "on",
            onHoverStop: "on",
            nextSlideOnWindowFocus: "off",

            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,



            keyboardNavigation: "off",

            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,

            fullWidth: "on",
            fullScreen: "off",

            spinner: "spinner01",

            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: "off",

            autoHeight: "off",
            forceFullWidth: "on",


            hideTimerBar: "on",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0
        });



    }
});


/* script for Testimonial */
$(function(){
    // vars for testimonials carousel
    var $txtcarousel = $('#testimonial-list');
    var txtcount = $txtcarousel.children().length;
    var wrapwidth = (txtcount * 200) ; // 400px width for each testimonial item
    $txtcarousel.css('width',wrapwidth);
    var animtime = 400; // milliseconds for clients carousel

    // prev & next btns for testimonials
    $('#prv-testimonial').on('click', function(){
        var $last = $('#testimonial-list li:last');
        $last.remove().css({ 'margin-left': '-415px' });
        $('#testimonial-list li:first').before($last);
        $last.animate({ 'margin-left': '0px' }, animtime);
    });

    $('#nxt-testimonial').on('click', function(){
        var $first = $('#testimonial-list li:first');
        $first.animate({ 'margin-left': '-415px' }, animtime, function() {
            $first.remove().css({ 'margin-left': '0px' });
            $('#testimonial-list li:last').after($first);
        });
    });


    // vars for clients list carousel
    // http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
    var $clientcarousel = $('#clients-list');
    var clients = $clientcarousel.children().length;
    var clientwidth = (clients * 140); // 140px width for each client item
    $clientcarousel.css('width',clientwidth);

    var rotating = true;
    var clientspeed = 1800;
    var seeclients = setInterval(rotateClients1, clientspeed);

    $(document).on({
        mouseenter: function(){
            rotating = false; // turn off rotation when hovering
        },
        mouseleave: function(){
            rotating = true;
        }
    }, '#clients');

    function rotateClients() {
        if(rotating != false) {
            var $first = $('#clients-list li:first');
            $first.animate({ 'margin-left': '-140px' }, 600, function() {
                $first.remove().css({ 'margin-left': '0px' });
                $('#clients-list li:last').after($first);
            });
        }
    }

    function rotateClients1() {
        if(rotating != false) {
            var $first = $('#testimonial-list li:first');
            $first.animate({ 'margin-left': '-200px' }, 200, function() {
                $first.remove().css({ 'margin-left': '0px' });
                $('#testimonial-list li:last').after($first);
            });
        }
    }
});

/* end Testimonial*/

