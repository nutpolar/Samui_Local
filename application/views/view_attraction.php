<?php
//echo '<pre>';
//print_r($attraction_name);
//exit;

//echo $_SERVER['REQUEST_URI'];
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
        <title>KOH SAMUI GUIDE AND GO - <?php echo $attraction_name->name; ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_menu.css"></link>

        <script src="jquery.js"></script> 

        <script
            src="http://maps.googleapis.com/maps/api/js">
        </script>

        <script>
            $(document).ready(function() {

                var lat = $('#latitude').val();
                var long = $('#longitude').val();

                //alert(lat+" | "+long);
                var myCenter = new google.maps.LatLng(lat, long);

                function initialize()
                {
                    var mapProp = {
                        center: myCenter,
                        zoom: 12,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                    var marker = new google.maps.Marker({
                        position: myCenter,
                        animation: google.maps.Animation.BOUNCE
                    });

                    marker.setMap(map);
                    var t = '<?php echo $attraction_name->name; ?>';

                    var infowindow = new google.maps.InfoWindow({
                        content: t
                    });

                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);

            });
        </script>




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
                <br/>
                <div class="text_name">
                    <div id="name">
                        <?php echo $attraction_name->name; ?>
                    </div>
                </div>
                <div style="float: left;">

                    <div class="content_picture" >
                        <div class="place_name"><img class="" id="" src="<?php echo base_url(); ?>images/pic.png" /></div>
                        <div class="place_pic">
                            <div id="gallery2" style="display:none;">

                                <?php
                                $str = $attraction_name->picture;
                                $ex = explode(" , ", $str);
                                //echo '<pre>';
                                //print_r($ex);
                                //exit;
                                ?>
                                <?php
                                foreach ($ex as &$value) {
                                    ?>
                                    <img alt="Preview Image 1"
                                         src="<?php echo base_url('uploads/' . $value); ?>"
                                         data-image="<?php echo base_url('uploads/' . $value); ?>"
                                         data-description="Preview Image 1 Description"/>
                                         <?php
                                     }
                                     ?>


                            </div>



                        </div>
                    </div>

                    <div class="content_picture" >
                        <div class="place_name"><img class="" id="" src="<?php echo base_url(); ?>images/map.png" /></div>
                        <div class="place_pic">
                            <input type="hidden" id="latitude" value="<?php echo $attraction_name->latitude; ?>"></input>
                            <input type="hidden" id="longitude" value="<?php echo $attraction_name->longitude; ?>"></input>

                            <div id="googleMap" style="width:465px;height:465px;"></div>
                        </div>
                    </div>
                    <div class="content_picture" >
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&appId=1401334993460122&version=v2.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>




                        <br/>
                        <div class="fb-share-button" data-href="<?php echo $_SERVER['REQUEST_URI']; ?>" data-layout="box_count"></div>

                        <a class="twitter-share-button"
                           href="https://twitter.com/share"
                           data-url="http://goo.gl/TD7rai"
                           data-counturl="https://dev.twitter.com/web/tweet-button"
                           data-count="vertical">
                            Tweet
                        </a>
                        <script>
                            window.twttr = (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                                t._e = [];
                                t.ready = function(f) {
                                    t._e.push(f);
                                };
                                return t;
                            }(document, "script", "twitter-wjs"));
                        </script>

                        <br/>
                        <div class="fb-comments" data-href="https://www.facebook.com/nutpoohhh" data-numposts="10" data-colorscheme="light"></div>
                    </div>
                </div>

                <div class="content_detail">

                    <div class="place_name"><img class="" id="" src="<?php echo base_url(); ?>images/detail.png" /></div>
                    <div class="place_detail">
                        <p><?php echo $attraction_name->detail; ?></p>

                    </div>

                    <div class="place_name"><img class="" id="" src="<?php echo base_url(); ?>images/address.png" /></div>
                    <div class="place_detail">
                        <p><?php echo $attraction_name->address; ?></p>
                    </div>



                    <div class="place_name"><img class="" id="" src="<?php echo base_url(); ?>images/contact.png" /></div>
                    <div class="place_detail">
                        <p><?php echo $attraction_name->contact; ?></p>
                    </div>

                    <div class="place_name"><img class="" id="" src="<?php echo base_url(); ?>images/time.png" /></div>
                    <div class="place_detail">
                        <p><?php echo $attraction_name->time; ?></p>
                    </div>

                    <div class="place_name"><img class="" id="" src="<?php echo base_url(); ?>images/service.png" /></div>
                    <div class="place_detail">
                        <p><?php echo $attraction_name->service; ?></p>
                    </div>
                </div>

                <div class="clear"></div>


            </div>

            <div class="clear"></div>
            <br/>
        </div>

        <div class="footer">

        </div>
        <br/>
    </body>


</html>

