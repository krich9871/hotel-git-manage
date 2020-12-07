<?php

  require 'connect.php' ;

  if (isset($_POST['booking'])) {

    if (empty($_POST['summary1'])) {
      $summaryprice = $_POST['summary2'] ;
            }
    if (empty($_POST['summary2'])) {
      $summaryprice = $_POST['summary1'] ;
    }

      $idcus = $_POST['customer_id'] ;
      $car = $_POST['car'] ;
      $food = $_POST['food'] ;
      $pahom = $_POST['pahom'] ;
      $mon = $_POST['mon'] ;
      $checkin = $_POST['checkin'] ;
      $checkout = $_POST['checkout'] ;


      $query = "INSERT INTO bookings(Price_r,special_req1,special_req2,special_req3,special_req4,checkin,checkout) VALUES('$summaryprice','$car','$food','$pahom','$mon','$checkin','$checkout')" ;
      $result = mysqli_query($db,$query) ;


      if ($result) {
         header('location: ../login.php') ;
      } else {

         echo "เกิดข้อผิดพลาดโดยไม่ทราบ".mysqli_error($db);
      }

    }





 mysqli_close($db) ;

 ?>
