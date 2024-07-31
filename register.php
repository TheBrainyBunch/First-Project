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
echo "connected successfully"."<br>";
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$select = "SELECT * FROM Login WHERE email = '$email' && password = '$password' ";
$rs1 = mysqli_query($con, $select);
if(mysqli_num_rows($rs1)> 0){
    ?>
    <script>
        alert("user already exsist");
        return false;
    </script>
    <?php
}
else{
   
    if($password != $cpassword){
        echo "password not matched";
    }
    else{
      $insert="insert into Login values('$email','$password')";
      $rs=mysqli_query($con,$insert);
      if ($rs == true) {
          echo "Hello ";
          echo $_POST["email"];
      } else {
          echo "error";
      }
    }
}

?>

<a href="index.html"><img src="images/contact-img.svg" width="100%" height="100%"></a>
</body>
</html>
