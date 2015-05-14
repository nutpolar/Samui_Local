<?php
//echo '<pre>';
//print_r($attraction_name);
//exit;
define('INCLUDE_CHECK',1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="Scripts/script.js"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <title><?php echo $title; ?></title>-->
        <title>KOH SAMUI GUIDE AND GO - MAP</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_menu.css"></link>

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
                        <li class="active"><a href='<?php echo base_url(); ?>index.php/welcome/samui_map'><span>Koh Samui Map</span></a></li>
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
<!--                <center>
                    <img class="" id="" src="<?php echo base_url(); ?>images/weather_exam.png" />
                </center>-->
                <div>
                    <?php
                    //foreach ($attraction_name as $value) {


//                        $name = $value->name;
//                        $lat = $value->latitude;
//                        $long = $value->longitude;
//                        $name_array[] = $lat . "," . $long . "," . $name;
//                        $names = implode(' || ', $name_array);
//                    echo '<pre>';
//                    print_r($name_array);
                        ?>
                        <br/>
<!--                        <input class="name" type="text" value="<?php echo $value->name; ?>"/>
                        <input class="lat" type="text" value="<?php echo $value->latitude; ?>"/>
                        <input class="long" type="text" value="<?php echo $value->longitude; ?>"/>
                        <?php $var = $value->name . "," . $value->latitude . "," . $value->longitude; ?>
                        <input type="text" class="locate"value="<?php echo $var; ?>"/>-->


                        <?php
                    //}
                    ?>
                </div>
                <!--                <div id="map-canvas" style="width: 920px; height: 600px; margin: 0 auto;"></div>-->

                <div id="map_canvas" > <!-- Map will display -->
        <div id="map" style="margin-left: 30px; width: 900px; height: 700px;"> <!-- Fullscreen Loading & Fullscreen Buttons area -->
            <span style="color:Gray;">Loading map...</span>			  </div> 
        <!-- Fullscreen Loading & Fullscreen Buttons area Ends -->
    </div><!-- Map Ends display -->

                <script type="text/javascript">
                    var locations = [
<?php
if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');
function connectDB($host, $user, $pass, $db) {

    $dbconn = @mysql_connect($host, $user, $pass);
    if ($dbconn) {
        if (@mysql_select_db($db, $dbconn)) {
            return $dbconn;
        }
    }
}
//username = project3_samui
//pass = 71zBWZEw
//db_name = project3_samui
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDB = "samui_db";

unset($error);

$dbConn = connectDB($dbHost, $dbUser, $dbPass, $dbDB);
if (!$dbConn) {
    die('Database is currently down...please try again later');
}

$query = "SELECT * from tb_attraction";
$result = mysql_query($query); {
    if ($num = mysql_numrows($result)) {
        $i = 0;
        while ($i < $num) {
            $id = mysql_result($result, $i, "id");
            $title = mysql_result($result, $i, "name");
            $lapt = mysql_result($result, $i, "latitude");
            $long = mysql_result($result, $i, "longitude");
            $aimage = mysql_result($result, $i, "picture");
            
            //$categoryid = mysql_result($result, $i, "name");
            //$short_title = mysql_result($result, $i, "name");
            echo "['<div class=info><h2>$title</h2><br><img src=../../uploads/$aimage><br><a href=../welcome/view_attraction/$id target=_blank><img id=button_map src=../../images/more.png></a></div>', $lapt, $long],";
            $i++;
        }
    } else {
        echo "<h3 align='center'><font color='#ff0000'>No Content Found</font></h3>";
    }
}
?>
                    ];

                    // Setup the different icons and shadows
                    var iconURLPrefix = '<?php echo base_url();?>/images/';

                    var icons = [
                        iconURLPrefix + 'marker3_new.png',
//                        iconURLPrefix + 'marker2.png',
//                        iconURLPrefix + 'marker3.png',
//                        iconURLPrefix + 'marker4.png',
//                        iconURLPrefix + 'marker5.png',
//                        iconURLPrefix + 'marker6.png',
//                        iconURLPrefix + 'marker7.png'
                    ]
                    var icons_length = icons.length;


                    var shadow = {
                        anchor: new google.maps.Point(5, 13),
                        url: iconURLPrefix + 'msmarker.shadow.png'
                    };

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: -5,
                        center: new google.maps.LatLng(40.715618, -74.011133),
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: false,
                        streetViewControl: false,
                        disableDefaultUI: true,
                        panControl: false,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.LEFT_BOTTOM
                        }
                    });

                    var infowindow = new google.maps.InfoWindow({
                        maxWidth: 400,
                        maxHeight: 350
                    });

                    var marker;
                    var markers = new Array();

                    var iconCounter = 0;

                    // Add the markers and infowindows to the map
                    for (var i = 0; i < locations.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2], locations[i][3], locations[i][4], locations[i][5]),
                            map: map,
                            icon: icons[iconCounter],
                            shadow: shadow
                        });

                        markers.push(marker);

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(locations[i][0]);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));

                        iconCounter++;
                        // We only have a limited number of possible icon colors, so we may have to restart the counter
                        if (iconCounter >= icons_length) {
                            iconCounter = 0;
                        }
                    }

                    function AutoCenter() {
                        //  Create a new viewpoint bound
                        var bounds = new google.maps.LatLngBounds();
                        //  Go through each...
                        $.each(markers, function(index, marker) {
                            bounds.extend(marker.position);
                        });
                        //  Fit these bounds to the map
                        map.fitBounds(bounds);
                    }
                    AutoCenter();
                </script> 

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

