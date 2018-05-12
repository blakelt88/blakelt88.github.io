// nav menu javascript



// jumbotron javascript

$("#coder").mouseenter(function(){
    $(".mixed-img").animate({opacity:'0'},1000);
    $(".code-img").animate({opacity:'1'},1000);
    $("#analyst").animate({opacity:'0'},1000);
});
$("#coder").mouseleave(function(){
    $(".mixed-img").animate({opacity:'1'},1000);
    $(".code-img").animate({opacity:'0'},1000);
    $("#analyst").animate({opacity:'1'},1000);
});

$("#analyst").mouseenter(function(){
    $(".mixed-img").animate({opacity:'0'},1000);
    $(".analytics-img").animate({opacity:'1'},1000);
    $("#coder").animate({opacity:'0'},1000);
});
$("#analyst").mouseleave(function(){
    $(".mixed-img").animate({opacity:'1'},1000);
    $(".analytics-img").animate({opacity:'0'},1000);
    $("#coder").animate({opacity:'1'},1000);
});

// skills javascript

jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar').animate({
        width:jQuery(this).attr('data-percent')
    },1500);
});

// Contact Page
