


<?php



$name = $_POST["name"];

$email =$_POST["email"];

$id = $_POST["empid"];



$dbServer = "localhost";

$dbPassword = 
"";

$dbUserName = 
"root";

$dbName = "database1";



$connection = 
new mysqli("localhost","root","","database1");



// print_r($connection);



if($connection->connect_errno){

exit("Database Connection failed. Reason: ".
$connection->connect_error);

}



// $query = "INSERT INTO newtable (Name, Email, EmpID) VALUES('$name','$email','$id')";

$query = "INSERT
INTO newtable
VALUES ('$name','$email', '$id')";

// print $query;



//$query = "INSERT INTO newtable (Name, Email, EmpID) VALUES('something','aman@csscorp','1234')";

// $query = 'UPDATE newtable SET Name = "Teju" WHERE Name = "John"' ;



// $query = "select * from newtable";

// $resultObj = $connection->query($query);



// if($resultObj->num_rows > 0){

// while($singleRowFromQuery = $resultObj->fetch_array()){

// echo "Name: ".$singleRowFromQuery['Name']."<br>";

// }

// }

// $resultObj->close();

// $test = query("INSERT INTO newtable (Name, Email, EmpID) VALUES($name, $email, $id)");



$result = $connection->query($query);



print($result);



$connection->close();

?>



<html>

<body>



Name <?php echo
$name; ?><br>

Email: <?php 
echo $email; 
?><br>

Emp Id: <?php 
echo $id; ?><br>



</body>

</html>
