<?php
include 'db.php';

$id = $_POST['complaint_id'];
$status = $_POST['status'];

$conn->query("UPDATE complaints SET status='$status' WHERE complaint_id='$id'");
echo json_encode(["updated"=>true]);
?>
