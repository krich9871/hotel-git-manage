<?php

  require "connect.php" ;

   if (isset($_POST['submit_login'])) {

      $email = $_POST['customer_email'] ;
      $password =$_POST['customer_password'] ;
    //  $id = $_POST['customer_id'] ;


 $sqlche = "SELECT customer_firstname,customer_email,customer_password ,customer_id FROM customers WHERE customer_email=? AND customer_password=? " ;
 $stmt = mysqli_prepare($db,$sqlche) ;

 mysqli_stmt_bind_param($stmt,"ss",$email,$password) ; //ss มาจาก string ถ้าเปน int จะเปน //
 mysqli_execute($stmt) ;
 $result_user = mysqli_stmt_get_result($stmt) ;


 if ($result_user -> num_rows == 1) {
     session_start();
     $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC) ;
     $_SESSION['id'] = $row_user['customer_id'] ;
     $_SESSION['firstname'] = $row_user['customer_firstname'] ;
     header('location: ../home.php') ;



 } else{

   echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง" ;
 }

}

mysqli_close($db) ;


 ?>
