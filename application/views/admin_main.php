
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ADMINISTRATION</title>
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
            <div style="margin-left: 740px; ">
                <a href="<?php echo base_url(); ?>" style="margin-right: 20px;" target="_blank">
                    <img class="" id="" style="margin-top: 10px;" src="<?php echo base_url(); ?>images/site.png" width="120px" height="40px" />
                </a>

                <a href="<?php echo base_url(); ?>index.php/login/logout">
                    <img class="" id="" style="margin-top: 10px;" src="<?php echo base_url(); ?>images/logout.png" width="120px" height="40px" />
                </a>

            </div>
            <br>
            <div class="content" id="tabs">
                <ul>
                    <li><a href="#tabs-1">Manage Attractions</a></li>
                    <li><a href="#tabs-2">Manage Categories</a></li>
                    <li><a href="#tabs-3">Manage Events</a></li>
                </ul>
                <div id="tabs-1">

                    <h2>Manage Attractions</h2>
                    <div class="box_search" id="">
                        <form style="width:440px; float: left;" action="<?php echo base_url(); ?>/index.php/admin/get_attraction" method="post">
                            Select Category : 
                            <select class="" id="" name="cate_name" style="width: 195px;" required>
                                <option name='category' value="">- Select Category -</option>
                                <?php
                                foreach ($category_name as $value) {
                                    ?>                                
                                    <option value="<?php echo $value->id; ?>" name="category[]" <?php echo @$base_where['s_cate_name'] == $value->id ? 'selected="select"' : ''; ?>/>
                                    <?php echo $value->name; ?>

                                    <?php
                                }
                                ?>
                            </select>

                            <input type="submit" value="Search"/>
                        </form>
                        <form action="<?php echo base_url(); ?>/index.php/admin" method="post">
                            <input type="submit" value="Show All"/>
                        </form>

                    </div>
                    <br/>

                    <div class="" id="" style="margin-left:550px;">
                        <a href="<?php echo base_url(); ?>index.php/admin/add_attraction">
                            <img class="" id="" src="<?php echo base_url(); ?>images/add.png" width="20px" height="20px" /> Add Attraction
                        </a>
                    </div>






                    <table width="100%" >
                        <thead class="tHead">
                        <th width="70px;">Number</th>
                        <th>Category</th>
                        <th>Attraction Name</th>
                        <th width="100px;"></th>
                        <th width="100px;"></th>
                        </thead>
                        <tbody class="tBody">
                            <?php
                            $num = 1;
                            foreach ($attraction_name as $value) {
                                ?>
                                <tr align="center">
                                    <td><?php echo $num; ?></td>
                                    <td align="left" style="padding-left:20px;"><?php echo $value->cate_name; ?></td>
                                    <td align="left" style="padding-left:20px;"><?php echo $value->name; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/update_attraction/<?php echo $value->id; ?>">
                                            <img class="" id="<?php echo $value->id; ?>" src="<?php echo base_url(); ?>images/info.ico" width="20px" height="20px" />Edit
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/delete_attraction/<?php echo $value->id; ?>">
                                            <img class="" id="" src="<?php echo base_url(); ?>images/delete.ico" width="20px" height="20px" />Delete
                                        </a>
                                    </td>

                                </tr>
                                <?php
                                $num++;
                            }
                            ?>
                        </tbody>
                    </table>

                    <?php
                    echo $this->pagination->create_links();
                    ?>

                </div>


                <div id="tabs-2">
                    <h2>Manage Categories</h2>

                    <div class="" id="" style="margin-left:550px;">
                        <a href="#open_category">
                            <img class="" id="" src="<?php echo base_url(); ?>images/add.png" width="20px" height="20px" /> Add Category
                        </a>
                    </div>

                    <div id="open_category" class="modalbg">
                        <div class="dialog">
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>ADD CATEGORY</h2>
                            <div class="add_category">
                                <form action="<?php echo base_url(); ?>index.php/admin/insert_category" method="POST">
                                    <table width="100%">
                                        <tr>
                                            <td align="right">Category Name : </td>
                                            <td align="center"><input type="text"class="inputs2" placeholder="Category Name" name="category_name"/></td>
                                            <td align="right"><input type="submit" class="button" value="ADD"/></td>
                                        </tr>
                                    </table>
                                </form>
                                <br>

                            </div>
                        </div>
                    </div>



                    <div id="edit_category">


                        <div class="update_category">
                            <form action="<?php echo base_url(); ?>index.php/admin/update_category/<?php echo @$edit_category_name->id; ?>" method="POST">
                                <table width="100%">
                                    <thead class="tHead">
                                    <th colspan="3">UPDATE CATEGOTY</th>
                                    </thead>
                                    <tbody class="tBody">
                                        <tr>
                                            <td align="right">Category Name : </td>
                                            <td align="center">
                                                <input type="text"class="inputs2" placeholder="Category Name" name="category_name" value="<?php echo @$edit_category_name->name; ?>"/>
                                                <input type="hidden" id="id_cate" name="id_cate" value="<?php echo @$this->uri->segment(3); ?>"/>
                                            </td>
                                            <td align="center">
                                                <input type="submit" class="button" value="SAVE"/>
                                                <input type="button" class="button" id="cancel"value="CANCEL"/>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            <br>

                        </div>

                    </div>
                    
                    <script>


                        $(document).ready(function() {
                            $('#edit_category').hide();
                            $('#add_group').click(function() {
                                //alert("Hello");
                                $('#permission_table').fadeIn();
                            });

                            $('#cancel').click(function() {
                                location.replace("<?php echo base_url(); ?>index.php/admin");
                            });

                            $("#id_cate").each(function() {
                                if (this.value != "") {
                                    $('#edit_category').show();
                                }
                            });
                        });



                    </script>





                    <table width="100%" >
                        <thead class="tHead">
                        <th width="70px;">Number</th>
                        <th>Category Name</th>
                        <th width="100px;"></th>
                        <th width="100px;"></th>
                        </thead>
                        <tbody class="tBody">

                            <?php
                            $num = 1;
                            foreach ($category_name as $value) {
                                ?>
                                <tr align="center" id="category_id">
                                    <td><?php echo $num; ?></td>
                                    <td align="left" style="padding-left:50px;"><?php echo $value->name; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/update_category/<?php echo $value->id; ?>"id="update">
                                            <img class=""  src="<?php echo base_url(); ?>images/info.ico" width="20px" height="20px" />Edit

                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/delete_category/<?php echo $value->id; ?>">
                                            <img class="" id="" src="<?php echo base_url(); ?>images/delete.ico" width="20px" height="20px" />Delete
                                        </a>

                                    </td>
                                </tr>
                                <?php
                                $num++;
                            }
                            ?>

                        </tbody>
                    </table>

                </div>


                <div id="tabs-3">
                    <h2>Manage Events</h2>
                    <div class="" id="" style="margin-left:550px;">
                        <a href="<?php echo base_url(); ?>index.php/admin/add_event">
                            <img class="" id="" src="<?php echo base_url(); ?>images/add.png" width="20px" height="20px" /> Add Event
                        </a>
                    </div>
                    
                    <table width="100%" >
                        <thead class="tHead">
                        <th width="70px;">Number</th>
                        <th width="200px;">Event Name</th>
                        <th width="100px;">Date</th>
                        
                        <th width="60px;"></th>
                        <th width="80px;"></th>
                        </thead>
                        <tbody class="tBody">

                            <?php
                            $num = 1;
                            foreach ($event_name as $value) {
                                ?>
                                <tr align="center" id="category_id">
                                    <td><?php echo $num; ?></td>
                                    <td align="left" style="padding-left:20px;"><?php echo $value->name; ?></td>
                                    <td><?php echo date("d M Y", strtotime($value->date)); ?></td>
                                    
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/update_event/<?php echo $value->id; ?>"id="update">
                                            <img class=""  src="<?php echo base_url(); ?>images/info.ico" width="20px" height="20px" />Edit

                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/delete_event/<?php echo $value->id; ?>">
                                            <img class="" id="" src="<?php echo base_url(); ?>images/delete.ico" width="20px" height="20px" />Delete
                                        </a>

                                    </td>
                                </tr>
                                <?php
                                $num++;
                            }
                            ?>

                        </tbody>
                    </table>
                    


                </div>
            </div>
            <br>





        </div>
    </body>
</html>
