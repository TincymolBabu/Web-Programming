<?php include('connect.php');
session_start();
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<center>
<h2>Login Page</h2>
<form action="check.php" method="post">
username:<input type="text" name="uname"><br><br>
password:<input type="password" name="pword"><br><br>
<input type="submi" name="submit" value="submit"><br>
</center>
</form>
</body>
</html>
<?php
if($_GET){
$msg=$_GET['msg'];
echo"<center>";
echo"<br><b>".$msg."</b>";
echo"</center>";
}
?>



