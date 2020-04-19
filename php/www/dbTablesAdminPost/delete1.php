<?php

$id  = $_GET['id'];
//$id  = 2;

//echo "id $id<br >";


include_once("connect.php");

$sql = "DELETE FROM tb1 WHERE id = :id";



// select


$stmt = $conn->prepare($sql);

//$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$stmt->execute();

//
//$stmt = $conn->prepare("DELETE FROM tb1 WHERE id = $id");


//$conn->exec($sql);

//echo " record deleted ";
header('Location:index.php');


?>


