<?php include("connect.php");
if($_POST){
$bookno=$_POST['bookno'];
$booktitle=$_POST['booktitle'];
$bookedition=$_POST['booked'];
$bookpub=$_POST['bookpub'];
$sql=myqli_query($conn,"INSERT INTO BOOK DETAILS VALUES('$booktitle',$bookedition,'$bookpub')");
$query=mysqli_query($cnn,"select*from book_details");
}
?>
<html>
<head>
<title>Display Book Details</title></head>
<body>
<table border="1px solid black">
<tr> 
<th>Book Number</th>
<th>Title</th>
<th>Edition</th>
<th>Publisher</th>
</tr>
<tr>
<?php
while($rw=mysqli_fetch_assoc($query)){
echo"<tr>";
echo"<td>".$row['Book_no']."</td>";
echo"<td>".$row['Book_title']."</td>";
echo"<td>".$row['Book_edition']."</td>";
echo"<td>".$row['Book_publisher']."</td>";
echo"</tr>";
}?>
</tr>
</table>
</body>
</html>
