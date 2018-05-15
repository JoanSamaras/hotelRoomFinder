<?php
session_start();
include_once 'db.inc.php';

$query = 'SELECT DISTINCT city FROM room ORDER BY city ASC';
$result = $conn->query($query);
$results = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['selected'] = (isset($_SESSION['city']) && $_SESSION['city']==$row['city']) ? 'selected':'';
        $results['results'][] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($results);
$conn->close();