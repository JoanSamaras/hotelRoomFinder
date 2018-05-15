<?php
session_start();
include_once 'db.inc.php';

// displays available values for the count_of_guests field of room Table,
// along with the selected filter-by value

$query = 'SELECT DISTINCT count_of_guests FROM room ORDER BY count_of_guests ASC';
$result = $conn->query($query);
$results = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $count_of_guests = 1;  // 1 guest: room_type 1 (single room)
        if (isset($_SESSION['guests'])){
            // filter for count_of_guests field is set
            $count_of_guests=$_SESSION['guests'];
        }elseif(isset($_SESSION['roomType'])){
            // filter count_of_guests not set, so use roomType filter instead
            $count_of_guests=$_SESSION['roomType'];
        }  
        $row['selected'] = ($row['count_of_guests'] == $count_of_guests) ? 'selected':'';
        $results['results'][] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($results);
$conn->close();