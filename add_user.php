<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php



$name=$_POST['name'];
$Nationality=$_POST['Nationality'];

$email=$_POST['email'];
$phone=$_POST['phone'];

$password=$_POST['password'];


$con=mysqli_connect("localhost","root","","hayaakum");
 mysqli_query($con,"set names 'utf8'"); 

  

mysqli_query($con,"insert users(name,email,password,phone,Nationality)values( '$name', '$email', '$password', '$phone','$Nationality')");


mysqli_close($con);

echo '<script type="text/javascript">
document.location="login.php";
</script>';



?>



</body>
</html>