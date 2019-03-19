<html>
<head>
<?php
include_once 'li.php';
?>
</head>
 <body>
     <?php
    if(isset($_POST['save'])){
        $sql = "INSERT INTO users (username, password, email)
        VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";
    }
 ?>
  <form method="post"> 
    <label id="first">Name:</label><br/>
    <input type="text" name="username"><br/>

    <label id="first">email Id</label><br/>
    <input type="password" name="email"><br/>

    <label id="first">salary</label><br/>
    <input type="number" name="sal"><br/>

    <button type="submit" name="save">save</button>
    <button type="submit" name="get">get</button>
    </form>
</body>
</html>