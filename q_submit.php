<?php
$host = "localhost";
$db_name = "mydatabase";
$username = "root";
$password = "1015";
$connection = null;
try{
$connection = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
$connection->exec("set names utf8");
}catch(PDOException $exception){
echo "Connection error: " . $exception->getMessage();
}


$name66 =(htmlentities($_GET['name55']));

$insert=("insert into qdata(name) values('$name66');");
$connection->query($insert);

?>


<html>
<center>
<h1>Thank You!!</h1>
<h2>We will get back to you shortly</h2>
<button onclick="window.location.href = 'qn.php'">New Quiz</button>
</center>

</html>





