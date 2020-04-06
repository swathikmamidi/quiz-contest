<?php
if(isset($_POST["answer3"]) && ($_POST["submit4"])) 
{
$name44=(htmlentities($_GET['name33']));
$url=("?name44=".$name44);

header('Location:q5.php'.$url);
}
else if(isset($_POST["answer1"]) && ($_POST["submit4"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer4"]) && ($_POST["submit4"])) 
{
header('Location:loss.php');
}
else if(isset($_POST["answer2"]) && ($_POST["submit4"])) 
{
header('Location:loss.php');
}
?>
<html>
<head>
<title>
question number 4
</title>
</head>
<center>
<form name="test" action="" method="post">
<body>
<h4>4.Hitler party which came into power in 1933 is known as?</h4>
<div>
<input name="answer1" value="South africa" type="radio">Labour Party
</div>
<div>
<input name="answer2" value="Brazil" type="radio">Ku-Klux-Klan
</div>
<div>
<input name="answer3" value="Corner Processing Unit" type="radio">Nazi Party
</div>
<div>
<input name="answer4" value="Central Processing Unit" type="radio">Democratic Party
</div>
<div>
<input type="submit" name="submit4" value="submit">
</form>
</body>
</center>
</html>




