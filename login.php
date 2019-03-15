<?php


?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="boot-assign.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
                <a href="boot_assign_index.php" class ="navbar-brand">Lifestyle</a>
            </div>
                    <div class = "collapse navbar-collapse" id="work">
                        <ul class ="nav navbar-nav navbar-right">
                            <li><a href="sign_up.php"><span class ="glyphicon glyphicon-user"></span>Sign-up</a></li>
                            <li><a href="#"><span class ="glyphicon glyphicon-log-in"></span>Login</a></li>
                        </ul>
                    </div>                
        </div>
     </nav>
        <div class="container">
            <div class="set_margin_login">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-info">
                        <div class ="panel-heading">
                        </div> 
                        <div class="panel-body">
                            <h1 style="font:Normal small-caps bolder 32px arial, sans-sherif;">Login to make a purchase</h1>
                        
                        <form method ="POST" action ="login_verification_script.php" >    
                            <div class="form-group">
                                <label for="email">Enter Registered E-mail</label>
                                <input type="text" class="form-control input-lg" name="email">
                            </div>
                                <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control input-lg" name="password">
                            </div>
                        
                        <div class="container">
                            <input type="submit" value="LOGIN" class="btn btn-info">
                        </div>
                        </form>
                        </div>
                        <div class="panel-footer">
                            <a href="sign_up.php"><button type="button" class="btn btn-primary btn-block">Don't have an account? Register</button></a>
                        </div>
                        
                </div>
            </div>
        </div>
        </div>
                        <div class="footer_set footerjob">
                            <div class="container">
                                    <center>Copyright � Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</center>
                            </div>
                        </div>
      
  </body>
</html>