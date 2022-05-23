<?php
include_once "database.php";

$message_id = $_POST['message_id'];

$sql = ("UPDATE messages SET status = 'read' WHERE id = '$message_id'");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Edited';
} else {
    header('Location: ../messages.php');
    exit;
}
?>