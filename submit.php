<?php
include 'db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$location = $_POST['location'];
$name = $_POST['name'];

$complaint_id = "CMP".rand(1000,9999);

$sql = "INSERT INTO complaints (complaint_id,title,description,category,location,name,status)
VALUES ('$complaint_id','$title','$description','$category','$location','$name','Pending')";

if($conn->query($sql)){
    echo json_encode(["success"=>true,"complaint_id"=>$complaint_id]);
}else{
    echo json_encode(["success"=>false]);
}
?>
