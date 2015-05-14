$(function() {
    menuToggle();
    linkAnimation();
    menuLinks();
    workSection();
    svgFill();
    formValCheck();
    
});


function menuToggle() {
    $(".menu-icon-container").click(function() {
        
       
        $(".menu-div1").toggleClass("menu-div1-transform");
        $(".menu-div2").toggleClass("menu-div2-transform");
        $(".menu-div3").toggleClass("menu-div3-transform");
        
        $(".menu").slideToggle(250);
        $("body").toggleClass("hide");
        
        
        
        
    });
};

function linkAnimation() {
    $('a[href^="#"]').click(function(event) {
        
        event.preventDefault();
        
        var target = this.hash;
        var $target = $(target);
        
        $(".menu-div1").removeClass("menu-div1-transform");
        $(".menu-div2").removeClass("menu-div2-transform");
        $(".menu-div3").removeClass("menu-div3-transform");
        
        $(".me").removeClass("mewhite");
        
        $("body, html").stop().animate({
            'scrollTop': $target.offset().top
            
        }, 600, "swing", function() {
            
            window.location.hash = target
        
        });    
    });
};

function menuLinks() {
    $(".menu-header a").click(function () {
        $(".menu").slideToggle(250);
        $("body").toggleClass("hide");
    });
};

function workSection() {
    $(".prace-img").click(function() {
        var indexClicked = $(this).index();
        var praceContentContainer = $(".prace-content-container");
        var children = $(praceContentContainer).children();
        var siblings = $("praceContentContainer" + indexClicked ).siblings();
        var imgIndex = $(".prace-content-img" + indexClicked );
        var overlay = $(".overlay");
        var overlayIndex = $(".overlay" + indexClicked );
        
        if ( imgIndex.hasClass("active-img") && !siblings.hasClass("active-img") ) {
            imgIndex.removeClass("active-img");
            overlayIndex.removeClass("overlay-show");  
        } else if (children.hasClass("active-img")) {
            children.removeClass("active-img");
            overlay.removeClass("overlay-show");
            overlayIndex.addClass("overlay-show");
            imgIndex.addClass("active-img");  
        } else {
                imgIndex.addClass("active-img");
                overlayIndex.addClass("overlay-show");     
        }
    });
};

function jump() {
    var HEIGHT_CHANGE_TOLERANCE = 100; // Approximately URL bar height in Chrome on tablet

    var jumbotron = $(this);
    var viewportHeight = $(window).height();

    $(window).resize(function () {
        if (Math.abs(viewportHeight - $(window).height()) > HEIGHT_CHANGE_TOLERANCE) {
            viewportHeight = $(window).height();
            update();
        }
    });

    function update() {
        jumbotron.css('height', viewportHeight + 'px');
    }

    update();
}

$('.container').each(jump);



function svgFill() {
    
    var svg = $("#langenglish, .enlang");
    var langenglish = $("#langenglish");
    var enlang = $(".enlang");

    svg.mouseenter(function() {
        enlang.attr("fill", "hsla(9, 60%, 37%, 0.95)");
        langenglish.attr("fill-opacity", "1");
    
    });    
        
    svg.mouseleave(function() {
        enlang.attr("fill", "white");
        langenglish.attr("fill-opacity", "0");

    });

};

function formValCheck() {
    $("input, textarea").change(function() {
        
        var val = $(this).val();
        
        if ( val ) {
       
        $(this).siblings("span").hide();
        } 
    
    }); 
};


