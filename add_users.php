<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php



$name_user=$_GET['name_user'];
$all_name=$_GET['all_name'];
$password=$_GET['password'];
$Validity_type=$_GET['Validity_type'];
$name_office=$_GET['name_office'];

echo $img;
echo $name_office;
$con=mysqli_connect("localhost","root","12345678","TIC");
 mysqli_query($con,"set names 'utf8'"); 





mysqli_query($con,"insert users(name_user,all_name,password,Validity_type,name_office)values('$name_user','$all_name','$password','$Validity_type','$name_office')");


mysqli_close($con);
/*
echo '<script type="text/javascript">
document.location="offices.php";
</script>';

*/
?>


</body>
</html>