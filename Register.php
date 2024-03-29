<?php
   require 'php/registerB.php' ;
   session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Register </title>

    <style>
        .coolip{
            border-radius: .9rem;
            border-width: 0px;
            background-color: gray ;
        }
        </style>
  </head>
  <body >
    <div class="container ">
        <div class="row text-center align-items-center">
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Room</a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Restaurant</a>
            </div>
            <div class="col top_and_bottom">
                <a href="#" class="nav-link color">Hall</a>
            </div>
            <div class="col top_and_bottom">
                <a href="#" class="nav-link color"><b>POGINITY HOTEL</b></a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">About Us</a>
            </div>
            <div class="col top_and_bottom border_right">
                <a href="#" class="nav-link color">Contact Us</a>
            </div>
            <div class="col top_and_bottom">
                <a href="login.php" class="nav-link color">Login</a>
            </div>
        </div>
    </div>

<form action="php/registerB.php" method="post">

    <div class="container-fluid img_1 top_pad" style="padding-bottom:40px;">
        <div class=" container width_10">
            <form>

                <h1><?php  if (isset($_SESSION['exists'])) :
                  echo $_SESSION['exists'];
                  unset($_SESSION['exists']) ;
                   endif ?></h1>
                <div class="container-fluid text-center">
                    <h1 class="mb-4 ">Register</h1>
                    <div class="mb-2 row " style="padding: 1%;">
                        <div class="col-md-2 text-right"><label for="name">First Name:</label></div>
                        <div class="col-md-3 text-left" ><input class="coolip" name="customer_firstname" type="name" id="name" style="width: 220px;"required></div> <div class="col-1"></div>
                        <div class="col-md-2 text-right"><label for="name" >Last Name:</label></div>
                        <div class="col-md-3 text-left"> <input class="coolip" name="customer_lastname" type="name" id="name" style="width: 220px;"required></div>
                    </div>
                    <div class="mb-2 row" style="padding: 1%;">
                        <div class="col-md-2 text-right"><label for="Email"></label>Email:</label></div>
                        <div class="col-md-3 text-left"><input class="coolip" name="customer_email" type="email" id="name" style="width: 220px;"required></div> <div class="col-1"></div>
                        <div class="col-md-2 text-right"><label for="password">Password:</label></div>
                        <div class="col-md-3 text-left"><input class="coolip" name="customer_password" type="password" id="password" style="width: 220px; border-radius: .9rem!important;" pattern="(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])[A-Za-z0-9]{8,32}" title="Password length must be 8-32 and contain at least one 'A-Z', 'a-z' and 'number'. (exclude special characters.)" required><br></div>
                    </div>
                    <div class="mb-2" style="padding: 1%;">
                        <label for="password">Phone Number:</label>
                        <input class="coolip" name="customer_phone" type="Phone" id="password" style="width: 220px; border-radius: .9rem!important;" pattern="[0-9]{1,}" title="Phone Number must be only number." required><br>
                    </div>
                    <div class="mb-2 row" style="padding: 5%;">
                        <div><button type="submit" name="submitregister" class="btn btn-secondary rounded" style="width: 250px;border-radius: .9rem!important;">Confirm</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </form>
    <div class="container-fluid text-center bottom_page padding_top">
        <h6>Copyright 2020 Poginity Ltd. All Rights Reserved.</h6>
        <h6>POGINITY Hotel. นาจอมเทียน, พัทยา (คลิ๊กเพื่อดูแผนที่) 095-156-2654 Pogihotel@gmail.com</h6>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
