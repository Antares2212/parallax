$(document).ready(function(){
  	$('ul.menu__list a').click(function(){
	    $('.menu__link').removeClass("activ");
	    $(this).addClass("activ");

        var id  = $(this).attr('href'),
            top = $(id).offset().top - 40;
         
        $('body,html').animate({scrollTop: top}, 800);
    });
});