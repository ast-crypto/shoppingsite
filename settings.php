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
    <title>Settings</title>
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
                    <li><a href="cart.php"><span class ="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="#"><span class ="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="logout.php"><span class ="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>                
        </div>
    </nav>
      <div class="container margin-top-set">
          <div class="col-md-4 col-md-offset-4">
              <h1 style="font: normal small-caps bolder 25px arial, sans-serif">Change Password</h1>
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Old Password" name="old-password">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="New Password" name="new-password">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Re-type New Password" name="re-new-passowrd">
              </div>
              <a href="#"><button type ="button" class="btn btn-primary">Change</button></a>
          </div>
      </div>
      <div class="footerjob footer_set_settings">
        <div class="container">
                <center>Copyright © Lifestyle Store. All Rights` Reserved and Contact Us: +91 90000 00000</center>
        </div>
      </div>
  </body>
</html>