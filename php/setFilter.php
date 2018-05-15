<?php
session_start();
include_once 'db.inc.php';

// Stores user supplied filters as session variables, and makes given values
// safe for being used in sql queries (to avoid sql injections).

if(isset($_POST['city'])) {
    $_SESSION['city'] = mysqli_real_escape_string($conn,$_POST['city']);
}

if(isset($_POST['roomType'])) {
    $_SESSION['roomType'] = intval($_POST['roomType']);
}

if(isset($_POST['guests'])) {
    $_SESSION['guests'] = intval($_POST['guests']);
}

if(isset($_POST['dateArr'])) {
    $_SESSION['dateArr'] = mysqli_real_escape_string($conn,$_POST['dateArr']);
}

if(isset($_POST['dateDepar'])) {
    $_SESSION['dateDepar'] = mysqli_real_escape_string($conn,$_POST['dateDepar']);
}

if(isset($_POST['priceMax'])) {
    $_SESSION['priceMax'] = intval($_POST['priceMax']);
}

if(isset($_POST['priceMin'])) {
    $_SESSION['priceMin'] = intval($_POST['priceMin']);
}
