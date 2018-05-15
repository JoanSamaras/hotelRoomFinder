<?php
function isRoomAvailable($conn, $room_id){
    $flag=1;
    if (isset($_SESSION['dateArr']) && isset($_SESSION['dateDepar'])) {
        // dirty hack to turn the input dates into php dates
        $dateArr = strtotime(str_replace('/', '-',$_SESSION['dateArr']));
        $dateDepar = strtotime(str_replace('/', '-',$_SESSION['dateDepar']));
        $query = "SELECT check_in_date, check_out_date FROM bookings WHERE room_id=$room_id";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $check_in_date = strtotime(str_replace('/', '-',$row['check_in_date']));
                $check_out_date = strtotime(str_replace('/', '-',$row['check_out_date']));
                // if there exists a booking with dates overlapping the ones currently supplied,
                // raise failure flag and exit loop
                if(($dateArr <= $check_out_date && $dateDepar >= $check_in_date) || ($check_in_date <= $dateDepar && $check_out_date >= $dateArr)){
                    $flag=0;
                    break;
                }
            }
        }
    }
    return $flag;
}
