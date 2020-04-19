<?php

$servername="db";

try 
{
    
       $conn = new  PDO("mysql:host=$servername;dbname=dbtablesadmin", 'root', 'kinano4');
       $conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);

//       echo "connected to mysql<br />";
  
}
catch(PDOException $e)
{
     
//   echo "connection  failed: " . $e->getMessage();

}
?>
