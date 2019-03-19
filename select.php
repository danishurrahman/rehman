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

$query="select * from t2 ORDER BY danish";
$resultObj=$connection->query($query);
if($resultObj->num_rows>0)
{
while($singleRowFromQuery=$resultObj->fetch_array())
{
    echo "Authors:".$singleRowFromQuery['danish'].PHP_EOL;
}

}
$resultObj->close();
$connection->close();
?>