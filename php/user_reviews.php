<?php
include_once 'db.inc.php';
$query = 'SELECT room.*,reviews.* FROM reviews 
          LEFT JOIN room ON room.room_id=reviews.room_id ORDER BY reviews.date_created DESC';
$result = $conn->query($query);
$results = array();
while ($row = $result->fetch_assoc()) {
    $results['results'][]=$row;
}
header('Content-Type: application/json');
echo json_encode($results);
$conn->close();