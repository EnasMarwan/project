$(function () {
    $('.links li a').click(function () {

        $(this).parent().addClass('active').siblings().removeClass('active');

    });
    
    $('.links li a').click(function () {
       
        $('html, body').animate({
            
            scrollTop: $('#' + $(this).data('value')).offset().top
            
        }, 1000);
        
        console.log('#' + $(this).data('value'));
    });
});