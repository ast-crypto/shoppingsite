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
    <title>Sign Up</title>
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
                            <li><a href="sign_up.php"><span class ="glyphicon glyphicon-user"></span> Sign up</a></li>
                            <li><a href="login.php"><span class ="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>                
        </div>
    </nav>
      <div class="container-fluid set_margin_sign-up">
            <div class="col-md-4 col-md-offset-4">
                <h1 style="font:Normal small-caps bolder 32px arial, sans-sherif;">SIGN UP</h1>
                    <form method ="POST" action ="user_registration_script.php" >
                        <div class="form-group">
                            
                            <input type="text" class="form-control input-lg" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control input-lg" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control input-lg" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control input-lg" placeholder="Contact" name="contact">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control input-lg" placeholder="City" name="city">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control input-lg" placeholder="Address" name="address">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-info">
                    </form>
                         
            </div>
      </div>
      <div class="footerjob sign-up-footer-set">
                            <div class="container">
                                    <center>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</center>
                            </div>
                        </div>
  </body>
</html>