<?php
session_start();
include_once 'db.inc.php';
include_once 'helpers.inc.php';

if(isset($_GET['id'])) {
    $room_id = intval($_GET['id']);
    echo isRoomAvailable($conn,$room_id);
}
$conn->close();