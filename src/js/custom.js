$(document).ready( function(){
       console.log('load ok');

    $('#socialLink').on('click', function(){
       console.log('i see click');

        $('.modalWrap').removeClass('close');
    });

    $('.close').on('click', function(){


        $('.modalWrap').addClass('close');
    });

    $('.colorLink').on('click', function(e){
        e.preventDefault();
        var color = $(this).css('background');
        if ( $(this).hasClass('selected')) {
            console.log('default color');
            $(this).removeClass('selected');
        }
        else {
            $('.colorLink').removeClass('selected');


            $(this).addClass('selected');
            console.log('has color ' + color);
        }

    });

    $('.sizeLink').on('click', function(e){
        e.preventDefault();
        if ( $(this).hasClass('selected')) {
            console.log('has class');
            $(this).removeClass('selected');
        }
        else {
            $('.sizeLink').removeClass('selected');
            console.log('default size');
            $(this).addClass('selected');
        }


    });

    $('.addToCart').on('click', function(e){

        e.preventDefault();
        console.log('default addToCart')
        $(this).addClass('selected');
    });

    // $('.color').on('click', function(e){
    //
    //     e.preventDefault();
    //     console.log('default addToCart')
    //     $('.colorLink').removeClass('selected');
    // });
    //
    // $('.size').on('click', function(e){
    //     e.preventDefault();
    //     console.log('default addToCart')
    //     $('.sizeLink').removeClass('selected');
    // });



});