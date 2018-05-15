<?php
include_once 'db.inc.php';

// Inserts to DB or updates a review for the specified room_id.

if(isset($_POST['room_id']) && isset($_POST['rate']) && isset($_POST['text'])) {
    $room_id = intval($_POST['room_id']);
    $rate = intval($_POST['rate']);
    $text = htmlentities(mysqli_real_escape_string($conn,$_POST['text']));
    $query = "SELECT * FROM reviews WHERE user_id=1 AND room_id=$room_id";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $conn->query("UPDATE reviews SET text = '$text', rate = $rate WHERE review_id=".$row['review_id']);
    }else{
        $conn->query("INSERT INTO reviews (text, rate, user_id, room_id) VALUES ('$text', $rate, 1, $room_id)");
    }
    echo "ok";
}else{
    echo "wrong parameters";
}
$conn->close();