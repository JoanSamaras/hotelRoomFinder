<?php
session_start();
include_once 'db.inc.php';
include_once 'helpers.inc.php';


// Returns the room details for the specified id, along with reviews,
// favorite status for the default user.

$ret = array();
if(isset($_GET['id'])) {
    $room_id=intval($_GET['id']);
    $query = "SELECT room.*,room_type.room_type as room_type_text, IFNULL(favorites.status,0) as is_favorite FROM room 
          LEFT JOIN room_type ON room.room_type=room_type.id 
          LEFT JOIN favorites ON room.room_id=favorites.room_id AND favorites.user_id=1 WHERE room.room_id=$room_id";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $ret['details']=$row;
        $ret['details']['is_avaialble']=isRoomAvailable($conn,$room_id);
        $query = "SELECT reviews.*,user.username as username FROM reviews 
        LEFT JOIN user ON reviews.user_id=user.user_id 
        WHERE room_id=$room_id";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ret['reviews'][] = $row;
            }
        }
    }

}
header('Content-Type: application/json');
echo json_encode($ret);
$conn->close();