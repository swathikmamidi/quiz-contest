<?php
if(isset($_POST["answer4"]) && ($_POST["submit1"])) 
{
$name11=(htmlentities($_GET['name00']));
$url=("?name11=".$name11);

header('Location:q2.php'.$url);


}
else if(isset($_POST["answer2"]) && ($_POST["submit1"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer3"]) && ($_POST["submit1"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer1"]) && ($_POST["submit1"])) 
{
header('Location:loss.php');
}
?>
<html>
<head>
<title>
question number 1
</title>
</head>
<center>
<form name="test" action"" method="post">
<body>
<h4>1.What is the fullform of CPU?</h4>
<div>
<input name="answer2" value="Center Processing Unit" type="radio">Center Processing Unit
</div>
<div>
<input name="answer3" value="Device Processing Unit" type="radio">Device Processing Unit
</div>
<div>
<input name="answer1" value="Corner Processing Unit" type="radio">Corner Processing Unit
</div>
<div>
<input name="answer4" value="CPU" type="radio">Central Processing Unit
</div>
<div>
<input type="submit" name="submit1" value="submit">
</form>
</body>
</center>
</html>



