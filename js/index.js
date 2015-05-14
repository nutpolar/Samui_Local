$(document).ready(function() {
    // Handler for .ready() called.
    //Page_Department
    $('#row_add_pic').hide();
    $('#dialog').hide();

    $('#add_pic').click(function() {

        //alert("Hello");
        $('#row_add_pic').show();

    });
    $('#delete_pic').click(function() {

        //alert("Hello");
        $('#row_add_pic').hide();

    });

    $('#update').click(function() {
        $("#dialog").dialog();
    });





});
//function update_cate() {
//      alert('ss');
//      //$('#open_update_cate').fadeIn();
//      document.getElementById("open_update_cate");
//  }

