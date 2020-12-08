
 <?php
   require 'connect.php' ;


   $booking_id = $_GET['booking_id'] ;


    $qdel =  "DELETE  FROM bookings  WHERE booking_id ='$booking_id' " ;
    $resultd = mysqli_query($db,$qdel) ;

    if ($resultd) {
      
      header('location: ../profile.php') ;

    }else {
      echo "ไม่่สามารถแก้ไขได้ได้";
    }


    mysqli_close($db) ;

  ?>
