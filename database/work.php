<?php
include_once "database.php";

$email = $_POST['email'];
$category = $_POST['category'];
$price = $_POST['price'];
$plan = $_POST['plan'];
$status = 'waiting';

$sql = ("INSERT INTO works (email, category, price, plan, status) VALUES ('$email', '$category', '$price', '$plan', '$status')");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Added';
} else {
    header('Location: ../index.html');
    exit;
}
?>