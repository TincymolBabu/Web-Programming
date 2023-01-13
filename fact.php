<html>
<head>
<title>FACTORIAL PROGRAM USIG FOR LOOP IN PHP<title>
</head>
<body>
<form methos ="POST">
enter the number:<br>
<input type="number" name="number" id="number">
<input type="submit" name="submit" value="submit">
</form>
<?php
if($_POST)
{
$fact=1;
$number=$_POST['number'];
echo "factorial of a nummber:<br><br>";
for($i=0;$i<=number;$i++)
{
$fact=$fact*$i;
}
echo $fact"<br>";
}
?>
</body.
</html>