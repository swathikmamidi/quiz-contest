<?php
if(isset($_POST["answer1"]) && ($_POST["submit55"])) 
{
$name55= htmlentities($_GET['name44']);
$url=("?name55=".$name55);

header('Location:q_submit.php'.$url);

}
else if(isset($_POST["answer2"]) && ($_POST["submit55"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer4"]) && ($_POST["submit55"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer3"]) && ($_POST["submit55"])) 
{
header('Location:loss.php');
}
?>
<html>
<head>
<title>
question number 5
</title>
</head>
<center>
<form name="test" action="" method="post">
<body>
<h4>5.India's first satellite is named after?</h4>
<div>
<input name="answer1" value="South africa" type="radio">Aryabhatta
</div>
<div>
<input name="answer2" value="Brazil" type="radio">Bhaskara 2
</div>
<div>
<input name="answer3" value="Corner Processing Unit" type="radio">Bhaskara 1
</div>
<div>
<input name="answer4" value="Central Processing Unit" type="radio">Albert Einstein
</div>
<div>
<input type="submit" name="submit55" value="submit">
</form>
</body>
</center>
</html>




