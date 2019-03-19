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

$query="update t1 ,t2";
$connection->query($query);
$connection->close();
?>