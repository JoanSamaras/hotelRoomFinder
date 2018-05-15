<?php
session_start();
include_once 'db.inc.php';

// gets the room_id, the dates and the user_id and inserts the booking into the DB

if(isset($_POST['room_id']) && isset($_SESSION['dateArr']) && isset($_SESSION['dateDepar'])) {
    $room_id = intval($_POST['room_id']);
    $dateArr = $_SESSION['dateArr'];
    $dateDepar = $_SESSION['dateDepar'];
    $conn->query("INSERT INTO bookings (check_in_date, check_out_date, user_id, room_id) VALUES ('$dateArr','$dateDepar', 1, $room_id)");
    echo 1;
}else{
    echo 0;
}
$conn->close();