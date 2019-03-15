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
    <title>Cart</title>
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
                            <li><a href="#"><span class ="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            <li><a href="settings.php"><span class ="glyphicon glyphicon-user"></span> Settings</a></li>
                            <li><a href="logout.php"><span class ="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>                
        </div>
    </nav>
      <div class="row white-background">
      <div class="cart-set col-md-4 col-md-offset-4">
      <div class="table table-bordered white-background">
          <table>
              <tbody>
              <tr>
                  <th>Item Number &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                  <th>Item Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                  <th>Price    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                  <th> &nbsp&nbsp&nbsp&nbsp&nbsp</th>
              </tr>
              <tr>
                  <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                  <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                  <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                  <td> &nbsp&nbsp&nbsp&nbsp</td>
              </tr>
              <tr class="grey-background">
                  <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                  <td>Total &nbsp&nbsp&nbsp&nbsp</td>
                  <td>Rs. 0/- &nbsp&nbsp&nbsp&nbsp</td>
                  <td><center><a href="success.php"><button type ="button" class="btn btn-primary btn-block">Confirm Order</button></a></center></td>
              </tr>     
              </tbody>
          </table>
      </div>
               </div>
      </div>
                        <div class="footerjob footer_set_cart">
                            <div class="container">
                                    <center>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</center>
                            </div>
                        </div>
 
  </body>
</html>