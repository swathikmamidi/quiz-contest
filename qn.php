<?php
if(isset($_POST["name12"])) 
{
$name00= htmlentities($_POST['name12']);
$url=("?name00=".$name00);
header('Location:q1.php'.$url);
}
?>
<head>
<title>
Test Page
</title>
</head>
<center>
<body>
<h1>Welcome to Quiz!!</h1>
<h2>Enter your name</h2>
<form action="" class="alt" method="POST">
<div class="row uniform">
<div class="name0">
<input name="name12" id="" placeholder="Name" type="text" required>
<br/>
<input class="alt" value="Submit" name="submit0" type="submit">
</form>
</body>
</center>




