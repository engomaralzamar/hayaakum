<?php
session_start();

$email=$_POST['email'];
$password=$_POST['password'];




$con=mysqli_connect("localhost","root","","hayaakum");
 mysqli_query($con,"set names 'utf8'");



$y=mysqli_query($con,'select * from users order by id desc');

$_SESSION['email']=$email;

while($c= mysqli_fetch_array($y)){
if ($email==$c[2]&&$password==$c[3]) {
	
  echo "<script type='text/javascript'>

document.location='user/index.php';
</script>";



  }	
   
  
   else if ($email=='admin@gmail.com'&&$password=='admin123') {
	   
	 
  echo "<script type='text/javascript'>
document.location='admin/index.php';

</script>";

  	
 
  


}else {
      // failed ouput an error
      $msg = "Please fill in all fields";
      $msgClass = "red";
	   echo "<script type='text/javascript'>
document.location='login.php';

</script>";
    }
	

}




	
//mysqli_close($con);










?>