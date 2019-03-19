<?php
$dbPassword="password123";
$dbUserName="danish";
$dbServer="localhost";
$dbName="database1";

$connection=new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);
print_r($connection);

if($connection->connect_errno)
{
    exit("Database connection failed.Reseaon:".$connection->connect_error);
}
$query="DELETE FROM t2 WHERE danish='rehmanHariAnkur'";
$connection->query($query);
$connection->close();
?>