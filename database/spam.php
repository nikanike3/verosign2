<?php
include_once "database.php";

$email = $_POST['email'];
$status = 'normal';

$sql = ("INSERT INTO spam (email, status) VALUES ('$email', '$status')");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Added';
} else {
    header('Location: ../index.html');
    exit;
}
?>