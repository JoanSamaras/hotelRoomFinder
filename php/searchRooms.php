<?php
session_start();
include_once 'db.inc.php';
include_once 'helpers.inc.php';

function filter_query($suggestions_threshold){
    if($suggestions_threshold >=0) {
        if (isset($_SESSION['city'])) {
            $sql[] = " room.city = '" . $_SESSION['city'] . "' ";
        }
    }

    if($suggestions_threshold >= 1) {
        if (isset($_SESSION['roomType'])) {
            $sql[] = " room.room_type = " . $_SESSION['roomType'] . " ";
        }
        if (isset($_SESSION['guests'])) {
            $sql[] = " room.count_of_guests = " . $_SESSION['guests'] . " ";
        }

    }

    if($suggestions_threshold >= 2) {
        if (isset($_SESSION['priceMax']) && isset($_SESSION['priceMin'])) {
            $sql[] = "  room.price BETWEEN " . $_SESSION['priceMin'] . " AND " . $_SESSION['priceMax'] . " ";
        }
    }

    $query = 'SELECT room.*,room_type.room_type as room_type_text, IFNULL(favorites.status,0) as is_favorite FROM room 
              LEFT JOIN room_type ON room.room_type=room_type.id 
              LEFT JOIN favorites ON room.room_id=favorites.room_id AND favorites.user_id=1 ';
    if (!empty($sql)) {
        // concatenate the given filters into the sql query
        $query .= ' WHERE ' . implode(' AND ', $sql);
    }
    return $query;
}
$threshold = 3;  // begin searching with all 3 filters: city, room_type - count_of_guests & price
$results = array();
while($threshold >= 0) {
    $query = filter_query($threshold);
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if(isRoomAvailable($conn,$row['room_id'])==1){
                $results[$threshold==3 ? 'results':'suggestions'][]=$row;
                // $threshold == 3 >> results
                // $threshold == 2 or $threshold == 1 >> suggestions
            }

        }
        // we found something, stop decreasing the suggestions threshold !
        break;
    } else {
        // if filter query returns nothing, decrease the threshold value (thus decreasing
        // the number of filters) and re-execute.
        $threshold--;
    }
}
header('Content-Type: application/json');
echo json_encode($results);
$conn->close();