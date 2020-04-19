<?php
include_once("connect.php");
// select
$stmt = $conn->prepare('select * from tb1');

$stmt->execute();

$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($arr);

if ($arr)
{
   print ("<table border=1>");
   foreach($arr as  $row)
   {
      print ("<tr>");

      foreach ($row as $key=>$value)
      {
         print ("<td >");
         //print( $key);
         print ($value);
         print ("</td>");
      }
   print ("<td >");
   //echo "heere come a buution";
   echo "<form action='updateDelete.php' method='get'>";
   //echo "rowid $row[id]";
   echo "<input type='hidden' name=id value=$row[id] />"; 
   echo "<input type=submit value='update/delete' />";
   echo "</form>"; 
   print ("</td>");
   print ("</tr>");
   }
       

   print ("</table>");
}
else
{
   echo "no record";
}
?>


