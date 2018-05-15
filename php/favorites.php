<?php
include_once 'db.inc.php';

$query = 'SELECT room.*,room_type.room_type as room_type_text, favorites.date_created as date_favorited FROM favorites 
          LEFT JOIN room ON room.room_id=favorites.room_id LEFT JOIN room_type ON room.room_type=room_type.id 
          WHERE favorites.user_id=1 ORDER BY date_favorited DESC';
$result = $conn->query($query);
$results = array();
while ($row = $result->fetch_assoc()) {
    $results['results'][]=$row;
}
header('Content-Type: application/json');
echo json_encode($results);
$conn->close();