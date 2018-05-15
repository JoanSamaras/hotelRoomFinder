<?php
include_once 'db.inc.php';

// Reads the favorite status for the specific room_id (and default user).
// If there is no record, it inserts an 1 status (favorite) into the DB.
// Otherwise, it toggles the status for the specified room_id.

if(isset($_POST['room_id'])) {
    $room_id = intval($_POST['room_id']);
    $query = "SELECT * FROM favorites WHERE user_id=1 and room_id=$room_id";
    $res= 0;
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        //reverse favorite status
        $toggled_status = 1-$row['status'];  // 1-0==1 when it is favorited and 1-1==0 when it is unfavorited
        $res = $toggled_status;
        $conn->query("UPDATE favorites SET status = $toggled_status WHERE favorite_id=".$row['favorite_id']);
    }else{
        $res=1;
        $conn->query("INSERT INTO favorites (status, user_id, room_id) VALUES (1, 1, $room_id)");
    }
    echo $res;
}else{
    echo "wrong parameters";
}
$conn->close();