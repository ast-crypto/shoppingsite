<?php
//$con = mysqli_connect("localhost","root","","qwerty") or die(mysqli_connect_error($con));
session_start();
if(!(isset($_SESSION['email'])))
{
    header('location:logout.php');
}
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
    <title>Products</title>
    <style>
        h1{font:normal small caps bolder 32px arial, sans-serif;}
    </style>
    
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
                            <li><a href="settings.php"><span class ="glyphicon glyphicon-user"></span> Settings</a></li>
                            <li><a href="logout.php"><span class ="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>                
        </div>
    </nav>
      <div class="container">
          <div class="jumbotron">
              <center>
              <h1>Welcome to our Lifestyle Store!</h1><br>
              <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place</p>
              </center>
      </div>          
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="camera.jpg">
              <div class="caption">
                  <center>
                  <h2>Cannon EOS</h2><br>
                  <p>Rs 5000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="camera.jpg">
              <div class="caption">
                  <center>
                  <h2>Cannon EOS</h2><br>
                  <p>Rs 5000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="camera.jpg">
              <div class="caption">
                  <center>
                  <h2>Cannon EOS</h2><br>
                  <p>Rs 5000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="camera.jpg">
              <div class="caption">
                  <center>
                  <h2>Cannon EOS</h2><br>
                  <p>Rs 5000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
          <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="shirt.jpg">
              <div class="caption">
                  <center>
                  <h2>Van Heusen</h2><br>
                  <p>Rs 2000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="shirt.jpg">
              <div class="caption">
                  <center>
                  <h2>Van Heusen</h2><br>
                  <p>Rs 2000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="shirt.jpg">
              <div class="caption">
                  <center>
                  <h2>Van Heusen</h2><br>
                  <p>Rs 2000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="shirt.jpg">
              <div class="caption">
                  <center>
                  <h2>Van Heusen</h2><br>
                  <p>Rs 2000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
          <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="watch.jpg">
              <div class="caption">
                  <center>
                  <h2>Rolex</h2><br>
                  <p>Rs 50000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="watch.jpg">
              <div class="caption">
                  <center>
                  <h2>Rolex</h2><br>
                  <p>Rs 50000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="watch.jpg">
              <div class="caption">
                  <center>
                  <h2>Rolex</h2><br>
                  <p>Rs 50000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
              <img src="watch.jpg">
              <div class="caption">
                  <center>
                  <h2>Rolex</h2><br>
                  <p>Rs 50000</p>
                  </center>
                  <a href="cart.php"><button type ="button" class="btn btn-primary btn-block">Add to Cart</button></a>
               </div>
          </div>
      </div>
        </div>
      <div class="footerjob">
            <div class="container">
                <center>Copyright � Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</center>
            </div>
        </div>
  </body>
</html>