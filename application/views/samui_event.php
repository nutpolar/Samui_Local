<?php
//echo '<pre>';
//print_r($event_name);
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
        <title>KOH SAMUI GUIDE AND GO - EVENT</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_menu.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_menu_event.css"></link>
        <script src="jquery.js"></script> 



        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/js/jquery-11.0.min.js'></script>	
        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script>	

        <link rel='stylesheet' href='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/css/unite-gallery.css' type='text/css' />

        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/themes/compact/ug-theme-compact.js'></script>
        <script type="text/javascript">

            jQuery(document).ready(function() {

                jQuery("#gallery1").unitegallery();

            });

            jQuery(document).ready(function() {

                jQuery("#gallery2").unitegallery();

            });

        </script>

        <script
            src="http://maps.googleapis.com/maps/api/js">
        </script>

        <script src="<?php echo base_url(); ?>/js/event_js.js"></script>





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
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/attraction'><span>Koh Samui Attraction</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/samui_map'><span>Koh Samui Map</span></a></li>
                        <li class="active"><a href='<?php echo base_url(); ?>index.php/welcome/samui_event'><span>Koh Samui Event</span></a></li>
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
                <br/>
<!--                <center>
                    <img class="" id="" src="<?php echo base_url(); ?>images/weather_exam.png" />
                </center>-->
                <script>


                </script>

                <div id='cssmenu_event' style="margin-left: 10px; ">
                    <ul>
                        <li class="active" id="event_all"><a href='JavaScript::0'>All</a></li>
                        <li id="event_jan"><a href='JavaScript::0'>Jan</a></li>
                        <li id="event_feb"><a href='JavaScript::0'>Feb</a></li>
                        <li id="event_mar"><a href='JavaScript::0'>Mar</a></li>
                        <li id="event_apr"><a href='JavaScript::0'>Apr</a></li>
                        <li id="event_may"><a href='JavaScript::0'>May</a></li>
                        <li id="event_jun"><a href='JavaScript::0'>Jun</a></li>
                        <li id="event_jul"><a href='JavaScript::0'>Jul</a></li>
                        <li id="event_aug"><a href='JavaScript::0'>Aug</a></li>
                        <li id="event_sep"><a href='JavaScript::0'>Sep</a></li>
                        <li id="event_oct"><a href='JavaScript::0'>Oct</a></li>
                        <li id="event_nov"><a href='JavaScript::0'>Nov</a></li>
                        <li id="event_dec"><a href='JavaScript::0'>Dec</a></li>
                    </ul>
                </div>

                <div class="event_all">
                    <?php
                    if (count($event_name) > 0) {

                        foreach ($event_name as $value) {
                            ?>    

                            <div class="date_event" id="jan">

                                <?php
                                $date = date("j F Y", strtotime($value->date));
                                $ex_date = explode(" ", $date);
                                ?>
                                <div class="box_date">
                                    <div class="date">
                                        <span class="binds"></span>
                                        <span class="month"><?php echo $ex_date[1]; ?></span>
                                        <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                    </div>
                                </div>
                                <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="event_all">
                            <div class="date_event">
                                No Have Event this month
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_jan">
                    <?php
                    foreach ($event_jan as $value) {
                        ?>    

                        <div class="date_event" id="jan">
                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_feb">
                    <?php
                    foreach ($event_feb as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_mar">
                    <?php
                    foreach ($event_mar as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_apr">
                    <?php
                    foreach ($event_apr as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_may">
                    <?php
                    foreach ($event_may as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_jun">
                    <?php
                    foreach ($event_jun as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_jul">
                    <?php
                    if (count($event_jul) > 0) {

                        foreach ($event_jul as $value) {
                            ?>    

                            <div class="date_event" id="jan">

                                <?php
                                $date = date("j F Y", strtotime($value->date));
                                $ex_date = explode(" ", $date);
                                ?>
                                <div class="box_date">
                                    <div class="date">
                                        <span class="binds"></span>
                                        <span class="month"><?php echo $ex_date[1]; ?></span>
                                        <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                    </div>
                                </div>
                                <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="event_jul">
                            <div class="date_event event_des">
                                <div style="text-align: center; padding-top: 50px;">
                                    <span>No Have Event this month</span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_aug">
                    <?php
                    foreach ($event_aug as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_sep">
                    <?php
                    foreach ($event_sep as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_oct">
                    <?php
                    foreach ($event_oct as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_nov">
                    <?php
                    foreach ($event_nov as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="event_dec">
                    <?php
                    foreach ($event_dec as $value) {
                        ?>    

                        <div class="date_event" id="jan">

                            <?php
                            $date = date("j F Y", strtotime($value->date));
                            $ex_date = explode(" ", $date);
                            ?>
                            <div class="box_date">
                                <div class="date">
                                    <span class="binds"></span>
                                    <span class="month"><?php echo $ex_date[1]; ?></span>
                                    <h1 class="day"><?php echo $ex_date[0]; ?></h1>
                                </div>
                            </div>
                            <div class="event_des">
                                    <?php //echo date("j F Y", strtotime($value->date)); ?>
                                    <span><?php echo $value->name; ?></span><br/>
                                    <?php echo $value->detail; ?><br/><br/>
                                    <?php
                                    if ($value->link == "") {
                                        ?>
                                        <?php echo $value->detail; ?>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo $value->link; ?>" target="_blank"><img src="<?php echo base_url();?>images/more.png"></img></a>
                                        <?php
                                    }
                                    ?>


                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="clear"></div>
                <br/>
                <div class="credit" style="text-align: right; margin-right: 20px;">
                    Reference :: <a href="http://www.kohsamuisunset.com/koh-samui-events-2015" target="_blank">http://www.kohsamuisunset.com/koh-samui-events-2015</a>
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

