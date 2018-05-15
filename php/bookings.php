<?php

include_once 'db.inc.php';
$query = 'SELECT room.*,room_type.room_type as room_type_text, IFNULL(favorites.status,0) as is_favorite, bookings.check_in_date, bookings.check_out_date, bookings.date_created as date_booked FROM bookings
          LEFT JOIN room ON room.room_id=bookings.room_id 
          LEFT JOIN room_type ON room.room_type=room_type.id 
          LEFT JOIN favorites ON room.room_id=favorites.room_id AND favorites.user_id=1 
          WHERE bookings.user_id=1 ORDER BY date_booked DESC';
$result = $conn->query($query);
$results = array();
while ($row = $result->fetch_assoc()) {
    $results['results'][]=$row;
}
header('Content-Type: application/json');
echo json_encode($results);
$conn->close();