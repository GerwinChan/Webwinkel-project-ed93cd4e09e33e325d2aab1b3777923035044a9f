var valueScroll;
var positionLast = 0;
var menuNavigatie = $('nav');
var highMenu = menuNavigatie.outerHeight();

function menuSchuif() {
 valueScroll = $(this).scrollTop();
    if(valueScroll>positionLast) {
    //we scrollen naar beneden   
    console.log('Scroll naar beneden');
        positionLast=valueScroll;
        menuNavigatie.css('top', -highMenu + 'px');
    } else {
        //we scrollen naar boven
     console.log('Het menu');
        positionLast=valueScroll;
        menuNavigatie.css('top',0);
    }
    
}

$(window).on('scroll', menuSchuif);