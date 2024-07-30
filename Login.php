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
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM Login WHERE email = '$email' && password = '$password'";

$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)> 0)
{
echo "Hello ";
echo $_POST["email"];
}
else

{  echo " Your have an account?";
    ?>
 <script>
     alert('Wrong Emailid or Password!! Try Again');
     </script>
<?php }
?>

<a href="index.html"><img src="images/book-img.svg" width="100%" height="100%"></a>
</body>
</html>
