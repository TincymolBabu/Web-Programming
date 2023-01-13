<?php include('connect.php);
session_start();
if($_POST["submit"]){
$uname=$_POST["uname"];
$pword=$_POST["pword"];
$sql=mysqli_query($conn,"SELECT*FROM userlogn WHERE
username='$uname' OR password='$pword'");
while($row=mysqli_fetch_assoc($sql)){
$dbuname=$row['username'];
$dbpword=$row['password'];
}
if($dbuname==$uname&& $dbpword==$pword){
$_SESSION['login_user']=$uname;
header("location:welcome.php");
}
elseif($dbuname==$uname && $dbpword!==$pword){
header("Location:login.php?msg=Wrong Password!!!");
//echo "<center><h2>Wrong Password!!</h2></center>";
}
}
?>
