<?php
if(isset($_POST["answer2"]) && ($_POST["submit3"])) 
{
$name33=(htmlentities($_GET['name22']));
$url=("?name33=".$name33);

header('Location:q4.php'.$url);

}
else if(isset($_POST["answer1"]) && ($_POST["submit3"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer4"]) && ($_POST["submit3"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer3"]) && ($_POST["submit3"])) 
{
header('Location:loss.php');
}
?>
<html>
<head>
<title>
question number 3
</title>
</head>
<center>
<form name="test" action="" method="post">
<body>
<h4>3.How many states are there in India?</h4>
<div>
<input name="answer1" value="South africa" type="radio">26
</div>
<div>
<input name="answer2" value="Brazil" type="radio">29
</div>
<div>
<input name="answer3" value="Corner Processing Unit" type="radio">28
</div>
<div>
<input name="answer4" value="Central Processing Unit" type="radio">27
</div>
<div>
<input type="submit" name="submit3" value="submit">
</form>
</body>
</center>
</html>



