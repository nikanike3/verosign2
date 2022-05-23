<?php
include_once "database.php";

$message_id = $_POST['message_id'];

$sql = ("UPDATE messages SET status = 'deleted' WHERE id = '$message_id'");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Deleted';
} else {
    header('Location: ../messages.php');
    exit;
}
?>