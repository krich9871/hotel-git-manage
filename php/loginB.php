<?php

  require "connect.php" ;

   if (isset($_POST['submit_login'])) {

      $email = $_POST['customer_email'] ;
      $password =$_POST['customer_password'] ;


 $sqlche = "SELECT customer_email,customer_password FROM customers WHERE customer_email=? AND customer_password=? " ;
 $stmt = mysqli_prepare($db,$sqlche) ;

 mysqli_stmt_bind_param($stmt,"ss",$email,$password) ; //ss มาจาก string ถ้าเปน int จะเปน //
 mysqli_execute($stmt) ;
 $result_user = mysqli_stmt_get_result($stmt) ;

 if ($result_user -> num_rows == 1) {
     session_start();
     $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC) ;
     $filename   =$_GET['image'] ;
     echo '<img src ="../icon/"'.$filename.'.png">';
     //save uploaded picture in your directory
     $_SESSION['picture'] = 
    // $_SESSION['username'] = "yoyo" ;
     header('location: ../home.php') ;
 } else{

   echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง" ;
 }

   }

mysqli_close($db) ;


 ?>
