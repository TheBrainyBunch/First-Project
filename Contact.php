<html>
<head>
</head>
<body>
<?php
$con=mysqli_connect("","","","");
if(!$con){
die("Connection failed:" .mysqli_connect_error());
}
else
echo "connected successfully";
$name=$_POST['name'];
$email=$_POST['email1'];
$number=$_POST['number'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="insert into contact values('$name','$email','$number','$subject','$message')";

$rs=mysqli_query($con,$sql);
if($rs==true)
 echo "Record inserted..";
else
 echo "error";

?>
<a href="index.html"><img src="images/contact-img.svg" width="100%" height="100%"></a>
</body>
</html>
