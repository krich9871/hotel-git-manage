
 <?php
   require 'connect.php' ;


   $booking_id = $_GET['booking_id'] ;



    $qb = "SELECT * FROM bookings WHERE booking_id LIKE $booking_id" ;
    $reb = mysqli_query($db,$qb) ;
    $rowb = mysqli_fetch_array($reb,MYSQLI_ASSOC) ;

    $room = $rowb['room_t'] ;

    $qcount = "SELECT * FROM room_type WHERE room LIKE '$room' " ;
    $recount = mysqli_query($db,$qcount) ;
    $rowcount = mysqli_fetch_array($recount,MYSQLI_ASSOC) ;

    $count = $rowcount['count_room']+1 ;

    $qcountpls = "UPDATE room_type SET count_room='$count'  WHERE room LIKE '$room' " ;
    $recountplus = mysqli_query($db,$qcountpls) ;


    $qdel =  "DELETE  FROM bookings  WHERE booking_id ='$booking_id' " ;
    $resultd = mysqli_query($db,$qdel) ;

    if ($resultd) {

      header('location: ../booking.php') ;

    }else {
      echo "ไม่่สามารถแก้ไขได้ได้";
    }


    mysqli_close($db) ;

  ?>
