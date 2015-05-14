
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ADD ATTRACTION</title>
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
<!--          <form action="<?php echo base_url(); ?>index.php/admin/insert_attraction" method="POST">-->
            <?php echo form_open_multipart('admin/insert_attraction');?>    
            <div class="content_place" id="tabs">
                    <h2>ADD ATTRACTION</h2>

                    <table width="100%">
                        <tr>
                            <td align="right" class="tHead">Category : </td>
                            <td align="left" class="tBody" width="500">
                                <select class="" id="" name="cate_id" style="width: 195px;" required="">
                                    <option name='category' value="">- Select Category -</option>
                                    <?php
                                    foreach ($category_name as $value) {
                                        ?>                                
                                        <option value="<?php echo $value->id; ?>" name="category[]"/>
                                        <?php echo $value->name; ?>

                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Name : </td>
                            <td><input type="text"class="inputs tBody" placeholder="Attraction Name" name="name" required=""/></td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Detail : </td>
                            <td>
                                <textarea name="detail" class="inputs tBody" placeholder="Detail" rows="10" cols="20" required=""></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Address : </td>
                            <td>
                                <textarea name="address" class="inputs tBody" placeholder="Address" rows="5" cols="20" required=""></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Picture : </td>
                            <td align="">
                                <input type="file" name="userfile[]" id="userfile" class="inputs tBody" placeholder="Picture" multiple=""/>
                            </td>
<!--                            <td align="left" width="60">
                                <img class="" id="add_pic" src="<?php echo base_url(); ?>images/add.png" width="25px" height="25px" />
                                
                            </td>-->
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Contact : </td>
                            <td>
    <!--                                            <input type="text"class="inputs" placeholder="Contact"/>-->
                                <textarea name="contact" class="inputs tBody" placeholder="Contact" rows="3" cols="20" required=""></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Latitude : </td>
                            <td><input type="text" name="latitude" class="inputs tBody" placeholder="Latitude" required=""/></td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Longitude : </td>
                            <td><input type="text" name="longitude" class="inputs tBody" placeholder="Longitude" required=""/></td>
                        </tr>


                        <tr>
                            <td align="right" class="tHead">Open Time/Close Time : </td>
                            <td><input type="text" name="open" class="inputs tBody" placeholder="Time" /></td>
                        </tr>

                        <tr>
                            <td align="right" class="tHead">Service Charge : </td>
                            <td><input type="text" name="service" class="inputs tBody" placeholder="Service Charge"/></td>
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

<?php echo form_close() ?>
<!--    </form>-->
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

