<?php 
// DB credentials.
$user='root';
$pass='';
// Establish database connection.
try
{
$dbh = new PDO('mysql:host=localhost;dbname=carrental', $user, $pass);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>