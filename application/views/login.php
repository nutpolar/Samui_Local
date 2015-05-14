<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>LOGIN ADMINISTRATION</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url();?>/css/style_login.css" rel="stylesheet" type="text/css" media="all" />
        <!--script-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    </head>
    <body>
        
        <div class="login">
            <!--start-loginform-->
            <form name="login-form" class="login-form" action="<?php echo base_url();?>index.php/login/check_login" method="POST">
                <span class="header-top"><img src="<?php echo base_url();?>/images/topimg.png"/></span>
                <div class="header">
                    <h1>LOGIN ADMINISTRATION</h1>
                    <span>Koh Samui Guide and Go Management</span>
                </div>
                <div class="content">
                    <input type="text" class="input username" placeholder="Username" name="username" required="">
                    <input type="password"   class="input password" placeholder="Password" name="password" required="">
                </div>
                <div class="login_button">
                    <input type="submit" name="submit" value="Login" class="button" />
                </div>
            </form>
            <!--end login form-->
            <!--side-icons-->
            <div class="user-icon"> </div>
            <div class="pass-icon"> </div>
            <!--END side-icons-->
            <!--Side-icons-->
            <script type="text/javascript">
                $(document).ready(function() {
                    $(".username").focus(function() {
                        $(".user-icon").css("left", "-69px");
                    });
                    $(".username").blur(function() {
                        $(".user-icon").css("left", "0px");
                    });

                    $(".password").focus(function() {
                        $(".pass-icon").css("left", "-69px");
                    });
                    $(".password").blur(function() {
                        $(".pass-icon").css("left", "0px");
                    });
                });
            </script>

        </div>
    </body>
</html>