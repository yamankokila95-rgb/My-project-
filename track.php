<?php
include 'db.php';

$id = $_GET['complaint_id'];
$result = $conn->query("SELECT * FROM complaints WHERE complaint_id='$id'");

if($row = $result->fetch_assoc()){
    echo json_encode($row);
}else{
    echo json_encode(["error"=>"Not Found"]);
}
?>
