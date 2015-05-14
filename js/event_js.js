$(document).ready(function() {

    $('.event_all').show();
    $('.event_jan').hide();
    $('.event_feb').hide();
    $('.event_mar').hide();
    $('.event_apr').hide();
    $('.event_may').hide();
    $('.event_jun').hide();
    $('.event_jul').hide();
    $('.event_aug').hide();
    $('.event_sep').hide();
    $('.event_oct').hide();
    $('.event_nov').hide();
    $('.event_dec').hide();

    $('#cssmenu_event li').click(function() {
        $('#cssmenu_event li').removeClass('active');
        $(this).addClass('active');
    });

    $('#event_all').click(function() {
        $('.event_all').show();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();

    });

    $('#event_jan').click(function() {

        $('.event_all').hide();
        $('.event_jan').show();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();

    });

    $('#event_feb').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').show();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_mar').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').show();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_apr').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').show();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_may').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').show();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_jun').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').show();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_jul').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').show();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_aug').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').show();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_sep').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').show();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_oct').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').show();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_nov').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').show();
        $('.event_nov').hide();
        $('.event_dec').hide();
    });

    $('#event_nov').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').show();
        $('.event_dec').hide();
    });

    $('#event_dec').click(function() {

        $('.event_all').hide();
        $('.event_jan').hide();
        $('.event_feb').hide();
        $('.event_mar').hide();
        $('.event_apr').hide();
        $('.event_may').hide();
        $('.event_jun').hide();
        $('.event_jul').hide();
        $('.event_aug').hide();
        $('.event_sep').hide();
        $('.event_oct').hide();
        $('.event_nov').hide();
        $('.event_dec').show();
    });
});


