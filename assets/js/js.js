$(function() {
    
    var menuDiv1 = document.querySelector('.menu-div1');
    var menuDiv2 = document.querySelector('.menu-div2');
    var menuDiv3 = document.querySelector('.menu-div3');
    var body = document.getElementsByTagName('body')[0];  
    var menu = document.querySelector('.menu');




function menuToggle() {
    
    var menuContainer = document.querySelector('.menu-icon-container');
    menuContainer.addEventListener('click', function() {
        
        

        menuDiv1.classList.toggle('menu-div1-transform');
        menuDiv2.classList.toggle('menu-div2-transform');
        menuDiv3.classList.toggle('menu-div3-transform');
        
        body.classList.toggle('hide');
        //
        //$('.menu').slideToggle(250);
        
        if (menu.classList.contains('visible')) {
            var height2 = parseInt(menu.style.height);
            
            
            function updateHeig() {
                height2 -= 45;
                menu.style.height = height2 + 'px';
                
                if (height2 === 0) {
                    menu.classList.remove('visible');
                } else {
                    requestAnimationFrame(updateHeig);
                }
            
            
            }
            requestAnimationFrame(updateHeig);
            
            
            
        } else {
            var height = 0;
                function updateHeight() {
                    height = height + 45;  
                    menu.style.height = height + 'px';
            
                    if (height > window.innerHeight) {
                        menu.classList.add('visible');
                    } else {
                        requestAnimationFrame(updateHeight);
                    }
            
                }
            menu.style.display = 'block';
            requestAnimationFrame(updateHeight);
        
        }
        
    });
    
  
    
};
    
menuToggle();
    
function pageAnimations() {
    var scrollTop = window.scrollY;
    var content = $('.content');
    var contentOffs = content.offset().top;
    var praceContent = $('.prace-content');
    var praceOffs = praceContent.offset().top;
    var zivotopis = $('.zivotopis-content');
    var zivotopisOffs = zivotopis.offset().top;
    var windowHeight = window.innerHeight;
    var kontakt = $('.kontakt-content');
    var kontaktOffs = kontakt.offset().top;
    
    if (scrollTop > (contentOffs - windowHeight + 50)) {
        content.addClass('animation');
    }
    if(scrollTop > (praceOffs - windowHeight + 50)) {
        praceContent.addClass('animation');
    }
    if (scrollTop > (zivotopisOffs - windowHeight + 50)) {
        zivotopis.addClass('animation');
    }
    if (scrollTop > (kontaktOffs - windowHeight + 50)) {
        kontakt.addClass('animation');
    }
    
    requestAnimationFrame(pageAnimations);
}
window.requestAnimationFrame(pageAnimations);

function linkAnimation() {
    
    var hashLinks = document.querySelectorAll('a[href^="#"]');
    
    
    for (i = 0; i < hashLinks.length; i++) {
    
        hashLinks[i].addEventListener('click', function(event) {
        
        event.preventDefault();
        
        var target = this.hash;
        var $target = $(target);
        
        menuDiv1.classList.remove('menu-div1-transform');
        menuDiv2.classList.remove('menu-div2-transform');
        menuDiv3.classList.remove('menu-div3-transform');
        
        
        
        $("body, html").stop().animate({
            'scrollTop': $target.offset().top
            
        }, 600, "swing");    
    });
        
    }
    
    
};
linkAnimation();

function menuLinks() {
    
    var links = document.querySelectorAll('.menu-header a');
    
    for (i = 0; i < links.length; i++) {
        
        links[i].addEventListener('click', function () {
        $(".menu").slideToggle(250);
        body.classList.toggle('hide');
    });
    }
    
};
menuLinks();
    
    
function workSection() {
    $(".prace-img").click(function() {
        var indexClicked = $(this).index();
        var children = $(".prace-content-container").children();
        var siblings = $("praceContentContainer" + indexClicked ).siblings();
        var imgIndex = $(".prace-content-img" + indexClicked );
        var overlayIndex = $(".overlay" + indexClicked );
        
        
        
        if ( imgIndex.hasClass("active-img") && !siblings.hasClass("active-img") ) {
            imgIndex.slideUp(250).removeClass('active-img');
            overlayIndex.removeClass("overlay-show");  
        } else if (children.hasClass("active-img")) {
            children.removeClass("active-img");
            overlay.removeClass("overlay-show");
            overlayIndex.addClass("overlay-show");
            imgIndex.slideUp(250).removeClass('active-img');  
        } else {
                imgIndex.slideDown(250).addClass('active-img');
                overlayIndex.addClass("overlay-show");     
        }
    });
};
workSection();

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
    
    var svg = document.querySelectorAll("#langenglish, .enlang");
    var langenglish = document.getElementById('langenglish');;
    var enlang = document.querySelectorAll('.enlang');

    for (i = 0; i < svg.length; i++) {
         
         svg[i].addEventListener('mouseenter', function() {
             
        for (k = 0; k < enlang.length; k++) {     
            enlang[k].setAttribute("fill", "hsla(9, 60%, 37%, 0.95)");
        };
        langenglish.setAttribute("fill-opacity", "1");
    
    }); 
        
        svg[i].addEventListener('mouseleave', function() {
        for (x = 0; x < enlang.length; x++) {    
            enlang[x].setAttribute("fill", "white");
        };
        langenglish.setAttribute("fill-opacity", "0");

    });     
             
       
    };
        
    

};
svgFill();    

function formValCheck() {
    
    var input = document.querySelectorAll('.input');
    
    for (i = 0; i < input.length; i++) {
    
        input[i].addEventListener('change', function() {
        
        for (k = 0; k < input.length; k++) {
        var val = input[k].value;
        var sibling = input[k].nextElementSibling;    
        
        if ( val ) {
            sibling.style.display = 'none';
            
        } else {
            sibling.style.display = 'block';
        }
    }
    }); 
        
    }
};
formValCheck();

});
