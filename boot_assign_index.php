<?php
//session_start();

//die();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="boot-assign.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class ="navbar-toggle" data-toggle="collapse" data-target ="#work">
                        <span class ="icon-bar"></span>
                        <span class ="icon-bar"></span>
                        <span class ="icon-bar"></span>
                    </button>
                    <a href="#" class ="navbar-brand">Lifestyle</a>
                </div>
                    <div class = "collapse navbar-collapse" id="work">
                        <ul class ="nav navbar-nav navbar-right">
                            <li><a href="sign_up.php"><span class ="glyphicon glyphicon-user"></span> Sign up</a></li>
                            <li><a href="login.php"><span class ="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>                
                </div>
        </nav>
        <div class="container-fluid">
        <div id="banner-image">
            
                <div id="banner-content">
                    <a href ="products.php" class ="btn btn-danger btn-lg active">Sign up or Login to Shop Now</a>
                </div>
            </div>
        
        <div class="footerjob">
            <div class="footer">
                <center>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</center>
            </div>
        </div>
        </div>
  </body>
</html>