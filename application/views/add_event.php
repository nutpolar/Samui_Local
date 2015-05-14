
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ADD EVENT</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/themes/cupertino/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/js/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.core.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.widget.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.tabs.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.mouse.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.draggable.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.position.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.resizable.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.button.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.dialog.js"></script>

        <link rel="stylesheet" href="<?php echo base_url(); ?>/js/jquery-ui-1.10.4.custom/development-bundle/demos/tabs/demos.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style_admin.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style_box.css" media="screen" type="text/css" />
        <script src="<?php echo base_url(); ?>/js/index.js"></script>

        <script>
            $(function() {
                $("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
                $("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");
            });

            $(document).ready(function() {

                $('#cancel').click(function() {
                    location.replace("<?php echo base_url(); ?>index.php/admin");
                });

            });
        </script>
        <style>
            .ui-tabs-vertical { width: 55em; }
            .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
            .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
            .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
            .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
            .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
        </style>


    </head>
    <body>
        <div class="header">

            <img class="" id="" src="<?php echo base_url(); ?>images/header_admin.png" />
        </div>
        <br/>
        <div class="containner">
            <div style="margin-left: 880px; ">
                <a href="<?php echo base_url(); ?>index.php/login/logout">
                    <img class="" id="" style="margin-top: 10px;" src="<?php echo base_url(); ?>images/logout.png" width="120px" height="40px" />
                </a>
            </div>
            <br>
            <form action="<?php echo base_url(); ?>index.php/admin/insert_event" method="POST">   
                <div class="content_place" id="tabs">
                    <h2>ADD EVENT</h2>
                    
                    <table width="100%">
                        <tr>
                            <td align="right" class="tHead">Event Name : </td>
                            <td><input type="text"class="inputs tBody" placeholder="Event Name" name="name" required=""/></td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Date : </td>
                            <td><input type="date"class="inputs tBody" placeholder="Date" name="date" required=""/></td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Detail : </td>
                            <td>
                                <textarea name="detail" class="inputs tBody" placeholder="Detail" rows="10" cols="20" required=""></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Location : </td>
                            <td>
                                <textarea name="location" class="inputs tBody" placeholder="Location" rows="5" cols="20" required=""></textarea>
                            </td>
                        </tr>

                        

                        <tr>
                            <td></td>
                            <td align="right">
                                <input type="submit" value="ADD"/>
                                <input type="button" class="button" id="cancel"value="CANCEL"/>
                            </td>
                        </tr>

                    </table>




                </div>

            </form>
            <br>

        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

