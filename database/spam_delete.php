<?php
include_once "database.php";

$email_id = $_POST['email_id'];

$sql = ("UPDATE spam SET status = 'deleted' WHERE id = '$email_id'");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Deleted';
} else {
    header('Location: ../spam.php');
    exit;
}
?>