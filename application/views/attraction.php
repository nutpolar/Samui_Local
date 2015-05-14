<?php
//echo '<pre>';
//print_r($category_name);
//exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="Scripts/script.js"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <title><?php echo $title; ?></title>-->
        <title>KOH SAMUI GUIDE AND GO - ATTRACTION</title>
<!--        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/styles_pagination.css"></link>-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_menu.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_category.css"></link>

        <!--        <link rel="shortcut icon" href="http://designshack.net/favicon.ico"/>
                <link rel="icon" href="http://designshack.net/favicon.ico"/>-->

        <script src="jquery.js"></script> 



        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/js/jquery-11.0.min.js'></script>	
        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script>	

        <link rel='stylesheet' href='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/css/unite-gallery.css' type='text/css' />

        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/themes/compact/ug-theme-compact.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>js/attraction_cate.js'></script>

        <script type="text/javascript">

            jQuery(document).ready(function() {

                jQuery("#gallery1").unitegallery();

            });

            jQuery(document).ready(function() {

                jQuery("#gallery2").unitegallery();

            });


            

        </script>

    </head>
    <body>
        <div class="header">
            <img class="" id="" src="<?php echo base_url(); ?>images/header_web.png" />

        </div>
        <div class="containner"> 

            <br/>

            <div class="menu_left">
                <div id="cssmenu">
                    <ul>
                        <li><a href='<?php echo base_url(); ?>'><span>Home</span></a></li>
                        <li class='active'><a href='<?php echo base_url(); ?>index.php/welcome/attraction'><span>Koh Samui Attraction</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/samui_map'><span>Koh Samui Map</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/samui_event'><span>Koh Samui Event</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/weather'><span>Koh Samui Weather</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="slide_right">
                <div id="gallery1" style="display:none;">
                    <img alt="Preview Image 1"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/1.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/1.jpg"
                         data-description="Preview Image 1 Description"/>

                    <img alt="Preview Image 2"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/2.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/2.jpg"
                         data-description="Preview Image 2 Description"/>

                    <img alt="Preview Image 3"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/3.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/3.jpg"
                         data-description="Preview Image 3 Description"/>

                    <img alt="Preview Image 4"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/4.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/4.jpg"
                         data-description="Preview Image 4 Description"/>

                    <img alt="Preview Image 5"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/5.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/5.jpg"
                         data-description="Preview Image 5 Description"/>

                    <img alt="Preview Image 6"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/6.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/6.jpg"
                         data-description="Preview Image 5 Description"/>
                </div>
            </div>
            <div class="clear"></div>
            <br/>

            <div class="content_main2">
                <div class="item_menu">
                    <div id='cssmenu_cate'>
                        <ul>
                            <li class='active'><a href='JavaScript::0'>All Category</a></li>
                            <?php
                            foreach ($category_name as $value_cate) {
                                ?>
                                <li class="cate_<?php echo $value_cate->id; ?>" value="<?php echo $value_cate->id; ?>">
                                    <a href='JavaScript::0'><?php echo $value_cate->name; ?></a>
                                </li>

                                <?php
                            }
                            ?>
                        </ul>
                    </div>

                </div>

                <div class="cate_all">
                    <div class="item_att">


                        <?php
                        foreach ($attraction_name as $value) {
                            ?>
                            <div class="item">

                                <div class="box_pic">
                                    <?php
                                    $str = $value->picture;
                                    $ex = explode(" , ", $str);
                                    ?>

                                    <img class="" id="" src="<?php echo base_url('uploads/' . $ex[0]); ?>" width="150px;" height="150px;" style="border-radius: 10px;"/>
                                </div>
                                <div class="box_name">
                                    <span><?php echo $value->name; ?></span>
                                    <p style="width: 145px; height: 145px;">
                                        Location : <?php echo $value->address; ?><br/><br/>
                                        Open Time : <?php echo $value->time; ?>

                                    </p>
                                </div>
                                <div class="clear"></div>
                                <div class="more">
                                    <a href="<?php echo base_url(); ?>index.php/welcome/view_attraction/<?php echo $value->id; ?>" target="_blank">
                                        <img class="" id="" src="<?php echo base_url(); ?>images/more.png"/>
                                    </a>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                
                <div class="cate_beach">
                    <div class="item_att">


                        <?php
                        foreach ($attraction_beach as $value) {
                            ?>
                            <div class="item">

                                <div class="box_pic">
                                    <?php
                                    $str = $value->picture;
                                    $ex = explode(" , ", $str);
                                    ?>

                                    <img class="" id="" src="<?php echo base_url('uploads/' . $ex[0]); ?>" width="150px;" height="150px;" style="border-radius: 10px;"/>
                                </div>
                                <div class="box_name">
                                    <span><?php echo $value->name; ?></span>
                                    <p style="width: 145px; height: 145px;">
                                        Location : <?php echo $value->address; ?><br/><br/>
                                        Open Time : <?php echo $value->time; ?>

                                    </p>
                                </div>
                                <div class="clear"></div>
                                <div class="more">
                                    <a href="<?php echo base_url(); ?>index.php/welcome/view_attraction/<?php echo $value->id; ?>" target="_blank">
                                        <img class="" id="" src="<?php echo base_url(); ?>images/more.png"/>
                                    </a>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                
                <div class="cate_temple">
                    <div class="item_att">


                        <?php
                        foreach ($attraction_temple as $value) {
                            ?>
                            <div class="item">

                                <div class="box_pic">
                                    <?php
                                    $str = $value->picture;
                                    $ex = explode(" , ", $str);
                                    ?>

                                    <img class="" id="" src="<?php echo base_url('uploads/' . $ex[0]); ?>" width="150px;" height="150px;" style="border-radius: 10px;"/>
                                </div>
                                <div class="box_name">
                                    <span><?php echo $value->name; ?></span>
                                    <p style="width: 145px; height: 145px;">
                                        Location : <?php echo $value->address; ?><br/><br/>
                                        Open Time : <?php echo $value->time; ?>

                                    </p>
                                </div>
                                <div class="clear"></div>
                                <div class="more">
                                    <a href="<?php echo base_url(); ?>index.php/welcome/view_attraction/<?php echo $value->id; ?>" target="_blank">
                                        <img class="" id="" src="<?php echo base_url(); ?>images/more.png"/>
                                    </a>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                
                <div class="cate_waterfall">
                    <div class="item_att">


                        <?php
                        foreach ($attraction_waterfall as $value) {
                            ?>
                            <div class="item">

                                <div class="box_pic">
                                    <?php
                                    $str = $value->picture;
                                    $ex = explode(" , ", $str);
                                    ?>

                                    <img class="" id="" src="<?php echo base_url('uploads/' . $ex[0]); ?>" width="150px;" height="150px;" style="border-radius: 10px;"/>
                                </div>
                                <div class="box_name">
                                    <span><?php echo $value->name; ?></span>
                                    <p style="width: 145px; height: 145px;">
                                        Location : <?php echo $value->address; ?><br/><br/>
                                        Open Time : <?php echo $value->time; ?>

                                    </p>
                                </div>
                                <div class="clear"></div>
                                <div class="more">
                                    <a href="<?php echo base_url(); ?>index.php/welcome/view_attraction/<?php echo $value->id; ?>" target="_blank">
                                        <img class="" id="" src="<?php echo base_url(); ?>images/more.png"/>
                                    </a>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                
                <div class="cate_adventure">
                    <div class="item_att">


                        <?php
                        foreach ($attraction_adventure as $value) {
                            ?>
                            <div class="item">

                                <div class="box_pic">
                                    <?php
                                    $str = $value->picture;
                                    $ex = explode(" , ", $str);
                                    ?>

                                    <img class="" id="" src="<?php echo base_url('uploads/' . $ex[0]); ?>" width="150px;" height="150px;" style="border-radius: 10px;"/>
                                </div>
                                <div class="box_name">
                                    <span><?php echo $value->name; ?></span>
                                    <p style="width: 145px; height: 145px;">
                                        Location : <?php echo $value->address; ?><br/><br/>
                                        Open Time : <?php echo $value->time; ?>

                                    </p>
                                </div>
                                <div class="clear"></div>
                                <div class="more">
                                    <a href="<?php echo base_url(); ?>index.php/welcome/view_attraction/<?php echo $value->id; ?>" target="_blank">
                                        <img class="" id="" src="<?php echo base_url(); ?>images/more.png"/>
                                    </a>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                
                <div class="cate_other">
                    <div class="item_att">


                        <?php
                        foreach ($attraction_other as $value) {
                            ?>
                            <div class="item">

                                <div class="box_pic">
                                    <?php
                                    $str = $value->picture;
                                    $ex = explode(" , ", $str);
                                    ?>

                                    <img class="" id="" src="<?php echo base_url('uploads/' . $ex[0]); ?>" width="150px;" height="150px;" style="border-radius: 10px;"/>
                                </div>
                                <div class="box_name">
                                    <span><?php echo $value->name; ?></span>
                                    <p style="width: 145px; height: 145px;">
                                        Location : <?php echo $value->address; ?><br/><br/>
                                        Open Time : <?php echo $value->time; ?>

                                    </p>
                                </div>
                                <div class="clear"></div>
                                <div class="more">
                                    <a href="<?php echo base_url(); ?>index.php/welcome/view_attraction/<?php echo $value->id; ?>" target="_blank">
                                        <img class="" id="" src="<?php echo base_url(); ?>images/more.png"/>
                                    </a>
                                </div>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                
                
                
                
                
                

                <!--                    <div style="margin-left: 400px;">
                                        <ul class="paginate pag1 clearfix">
                                            <li class="single">Page 1 of 5</li>
                                                                <li class="current">prev</li>
                                            <li class="current">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href=#"">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">next</a></li>
                                        </ul>
                                    </div>-->













                <div class="clear"></div>
                <br/>
                <div class="credit" style="text-align: right; margin-right: 20px;">
                    Reference :: <a href="http://www.kosamui.com/attractions/all-attractions.htm" target="_blank">http://www.kosamui.com/attractions/all-attractions.htm</a>
                </div>

            </div>

            <div class="clear"></div>
            <br/>
        </div>

        <div class="footer">

        </div>
        <br/>
    </body>


</html>

