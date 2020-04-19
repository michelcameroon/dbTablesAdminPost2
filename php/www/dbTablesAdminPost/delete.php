<?php
$id  = $_GET['id'];
echo "id $id<br >";
include_once("connect.php");
// select
$stmt = $conn->prepare("select * from tb1 where id = '$id'");
$stmt->execute();

$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);


print_r($arr);



print ("<table border=1>");

foreach($arr as  $row)
{
    print ("<form action ='delete1.php' method='get'>");
    foreach ($row as $key=>$value)
    {
       print ("<tr>");
       print ("<td >");
       print( $key);
       print ("</td>");
       //print ("<input type='text' name=$key value=$key />");
       print ("<td >");
       print ($value);
       print ("<input type='text' name=$key value=$value />");
       print ("</td>");
       print ("</tr>");

     }
     print ("<tr>");
     print ("<td >");
     print ("<input type='submit' value='delete'/>");
     print ("</td>");
     print ("</tr>");

     print ("</form>");
     
}
       

print ("</table>");



?>


