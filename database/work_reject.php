<?php
include_once "database.php";

$work_id = $_POST['work_id'];

$sql = ("UPDATE works SET status = 'rejected' WHERE id = '$work_id'");


if(!mysqli_query($conn, $sql)) {
    echo 'Not Rejected';
} else {
    header('Location: ../admin.php');
    exit;
}
?>