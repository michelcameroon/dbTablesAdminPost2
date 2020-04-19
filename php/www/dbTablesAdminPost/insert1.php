<?php
$name = $_GET['name'];
//$name = $_POST['name'];
//echo "name $name";

$arr1 = $_GET;
//print_r($arr1);
/*

foreach($arr1 as $key=>$value)
{
   print ("<br> key $key");
   print ("<br>value $value");

}
*/

include_once("connect.php");

$insert = "insert into tb1 (name) values(?)";

$stmt = $conn->prepare($insert);
$stmt->execute([$name]);

//echo "header('Location:index.php')";
header('Location:index.php');

?>




