<html>
<head>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","@khushalmdeora#009","khushal");
if(!$con){
die("Connection failed:" .mysqli_connect_error());
}
else
echo "connected successfully"."<br>";
$location = $_POST['location'];
$Where=$_POST['Whereto'];
$How=$_POST['Howmany'];
$Aadhar=$_POST['aadhar'];
$Arrivals=$_POST['Arrivals'];
$Leaving=$_POST['Leaving'];
$sql="insert into book_now values('$location','$Where','$How','$Aadhar','$Arrivals','$Leaving')";

$rs=mysqli_query($con,$sql);
if($rs==true)

echo "Ready for your Destiny"."<br>";
else
 echo "error";

?>
<a href="index.html"><img src="images/green.jpg" alt=""width="100%" height="100%"></a>
</body>
</html>
