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
    print ("<form action ='update1.php' method='get'>");
    foreach ($row as $key=>$value)
    {
       print ("<tr>");
       print ("<td >");
       print( $key);
       print ("</td>");

       print ("<td >");
       print ("<input type='text' name = $key value = $value />");
       print ($value);
       print ("</td>");
       print ("</tr>");

     }
     print ("<tr>");
     print ("<td >");
     print ("<input type='submit' value='save'/>");
     print ("</td>");
     print ("</tr>");

     print ("</form>");
     
}
       

print ("</table>");


/*
while ($arr)
{
print ($arr);


   print ("<table border=1>");

   print ("<tr>");
   foreach ($arr as $key => $value)
   {
      echo "{$key} +> {$value}";    
   } 

}
*/
?>


