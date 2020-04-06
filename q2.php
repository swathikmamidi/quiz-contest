<?php
if(isset($_POST["answer2"]) && ($_POST["submit2"])) 
{
$name22=(htmlentities($_GET['name11']));
$url=("?name22=".$name22);

header('Location:q3.php'.$url);

}
else if(isset($_POST["answer1"]) && ($_POST["submit2"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer4"]) && ($_POST["submit2"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer3"]) && ($_POST["submit2"])) 
{
header('Location:loss.php');
}
?>
<html>
<head>
<title>
question number 2
</title>
</head>
<center>
<form name="test" action="" method="post">
<body>
<h4>2.What country is the Amazon basin is located in?</h4>
<div>
<input name="answer1" value="South africa" type="radio">South Africa
</div>
<div>
<input name="answer2" value="Brazil" type="radio">Brazil
</div>
<div>
<input name="answer3" value="Corner Processing Unit" type="radio">India
</div>
<div>
<input name="answer4" value="Central Processing Unit" type="radio">Mexico
</div>
<div>
<input type="submit" name="submit2" value="submit">
</form>
</body>
</center>
</html>


