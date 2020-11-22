<?php

  require "connect.php" ;

  session_start();
  if (isset($_POST['profile'])) {

     $id = $_POST['customer_id'] ;
     $sqlre = "SELECT * FROM customers WHERE  customer_id= '$id ' " ;

     $q =mysqli_query($db,$sqlre) ;

     $row = mysqli_fetch_array($q,MYSQLI_ASSOC) ;
 /*$sql = "SELECT * FROM customers  " ;
 $result_p = mysqli_query($db,$sql) ;
  while($row = mysqli_fetch_array($result_p,MYSQLI_ASSOC) )*/





        $_SESSION['firstname'] = $row['customer_firstname'] ;
        $_SESSION['lastname'] = $row['customer_lastname'] ;
        $_SESSION['email_1'] = $row['customer_email'];
        $_SESSION['password'] = $row['customer_password'] ;
        $_SESSION['id'] = $row['customer_id'] ;
        header('location: ../profile.php') ;


    }


mysqli_close($db) ;


 ?>
