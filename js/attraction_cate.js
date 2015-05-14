$(document).ready(function() {
    $('.cate_all').show();
    $('.cate_beach').hide();
    $('.cate_temple').hide();
    $('.cate_waterfall').hide();
    $('.cate_adventure').hide();
    $('.cate_other').hide();

    $('#cssmenu_cate li').click(function() {
        $('#cssmenu_cate li').removeClass('active');
        $(this).addClass('active');
    });

    $('#cssmenu_cate li').click(function() {
        var cate_id = this.value;
        if (cate_id == "0") {
            $('.cate_all').show();
            $('.cate_beach').hide();
            $('.cate_temple').hide();
            $('.cate_waterfall').hide();
            $('.cate_adventure').hide();
            $('.cate_other').hide();
        }
        if (cate_id == "1") {
            $('.cate_all').hide();
            $('.cate_beach').show();
            $('.cate_temple').hide();
            $('.cate_waterfall').hide();
            $('.cate_adventure').hide();
            $('.cate_other').hide();
        }       
        if (cate_id == "2") {
            $('.cate_all').hide();
            $('.cate_beach').hide();
            $('.cate_temple').show();
            $('.cate_waterfall').hide();
            $('.cate_adventure').hide();
            $('.cate_other').hide();
        }
        if (cate_id == "3") {
            $('.cate_all').hide();
            $('.cate_beach').hide();
            $('.cate_temple').hide();
            $('.cate_waterfall').show();
            $('.cate_adventure').hide();
            $('.cate_other').hide();
        }
        if (cate_id == "5") {
            $('.cate_all').hide();
            $('.cate_beach').hide();
            $('.cate_temple').hide();
            $('.cate_waterfall').hide();
            $('.cate_adventure').show();
            $('.cate_other').hide();
        }
        if (cate_id == "6") {
            $('.cate_all').hide();
            $('.cate_beach').hide();
            $('.cate_temple').hide();
            $('.cate_waterfall').hide();
            $('.cate_adventure').hide();
            $('.cate_other').show();
        }
        


    });


});