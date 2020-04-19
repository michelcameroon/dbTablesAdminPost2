
<?php
include_once("connect.php");
$stmt = $conn->prepare("describe tb1");
$stmt->execute();
$fields = $stmt->fetchAll(PDO::FETCH_COLUMN);
print_r($table_fields);
if (!isset($id))
{
print("<table border=1>");
print("<form action='insert1.php'method='get'>");
foreach ($fields as  $key=>$value)
{
   print("<tr>");
   print("<td>");
   print($value);
   print("</td>");
   print("<td>"); 
   //print("<input type='text' name=$key placeholder='put the value'>"); 
  // print("<input type='text' name=$key value='put the value'>"); 
   print("<input type='text' name=$value value='put the value'>"); 
   print("</td>");
}
print("</tr>");
print("<tr>");
print("<td>"); 
print("<input type='submit' value='insert' />"); 
print("</td>");
print("</tr>");
print ("</table>");
print("</form>");




/*

$insert1 = "insert into tb1 (name1) values (?)";

$stmt = $conn->prepare($insert1);

$stmt->execute(["jarvis"]);

*/

}
?>




