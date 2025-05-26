$(document).ready(function () {
    $('#menu-page-menu li').hover(function () {
        $(this).find('ul:first').css({ visibility: 'visible', display: 'none' }).fadeIn(400);
    }, function () {
        $(this).find('ul:first').css({visibility: 'hidden'})       
    } );
}) 
