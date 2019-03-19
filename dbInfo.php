<?php

$dbPassword = "password!23";
$dbUserName = "sample";
$dbServer = "localhost";
$dbName = "sampletable";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>