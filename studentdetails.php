<html>
<body>
<form name="fomrs" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="name"><br><br>
EmailID:<input type="email" name="email"><br><br>
Address:<textarea name="address"></textarea><br><br>
Gender:
<input type="radio" id="male" name="gender" value="male">male
<input type="radio" id="male" name="gender" value="female">female<br><br>
Date of Birth: <input type="date" name="dob">
<input type="submit"  name="submit" value="submit">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
echo "Name :" .$name ."<br>";
echo "EmailID:" .$email ."<br>";
echo " Address:" .$address ."<br>";
echo "Gender: " .$gender ."<br>";
echo "Date of Birth: " .$dob ."<br>";
}
?>