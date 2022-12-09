<?php
$severname = "localhost";
$usernam ="root";
$password ="";
$dbName ="connection";

//create connection
try
{

$con = new PDO("mysql:host=$severname;dbname=$dbName",$usernam,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connection Success";
}
catch(PDOException $e){

echo"Error in connection" .$e->getMessage();
}
?>