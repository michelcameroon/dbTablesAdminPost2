<?php

$id  = $_GET['id'];

//echo "id $id<br >";


include_once("connect.php");



// select
$stmt = $conn->prepare("select * from tb1 where id = '$id'");

$stmt->execute();

$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);


//print_r($arr);

$stmt = $conn->prepare("UPDATE tb1 SET name = ? where id = '$id'");

$stmt->execute([$_GET["name"]]);

header('Location:index.php');

?>


