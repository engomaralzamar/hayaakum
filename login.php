



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style5.css">
    <title>login</title>
 
  <link rel="stylesheet" href="css/materialize.min.css">
  <script src="js/fontawesome-all.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
<style>

body
{

    background-color: rgb(60, 109, 138);
}
#hh
{

    color: rgb(60, 109, 138);
}
#hj
{

    color: green;
}
#bt
{
border: 1px solid black;
  border-radius: 1.4rem;
   background-color:green;
}
#ar
{
border: 1px solid black;
  border-radius: 1.4rem;
   background-color:#fff;
   width:130px;
 text-align: center;
}

</style>


</head>
<body >

<div id="ar">


<a href="login_ar.php">عربي</a>
||
<a href="login.php">English</a> </div >


        <div >
      

            <div>

    


        <div >

     
	   

	   
	 
	   <h2 id="h1">حـــــياكم</h2>
	   <h2 id="h2">HAYAAKUM</h2>
	   
	   
	   
	   
	   
         </div>
		 
	 
            </div>

          

            <div class="profile">
                    <div class="profile-pic">
                        </div>
                    
                   
                    <div class="profile-content">
                      
					<img src="images/aa1.jpg" align="left"  alt="" class="im" width="300" height="300">
					<img src="images/aa2.jpg" align="left"  alt="" class="imm" width="300" height="100">
					
					</div>
            </div>
          


            <div class="skills">
                
				
                <h1 id="hh">Sing in </h1>
				
                <div class="skill-pic">
				<div class="container">
				<div class="box">
    <div class="row">
      <div class="col s12= m12">
      
		
         
       
       
         
         
            <div class="row">
              <form class="col s12" method="POST" action="cheek.php"  novalidate>
                <div class="row">
                <label for="email">email</label>
				   <div class="input-field">
                    
                    <input type="email" id="email" name="email">
                    
                  </div>
                </div>
                <div class="row">
				<label for="userid"> password</label>
                  <div class="input-field">
                   
                    <input type="password" id="password" name="password" >
                    
                  </div>
                </div>
                <div class="row">
                  <p class="center-align">
                  
                  <a href="#">Already have an account?</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				  <a href="register.php" id="hj"><b> Sing up</b></a><br>
					 
                    <button type="submit" id="bt" class="waves-effect waves-light btn green" name="submit">Login</button>
                  </p>
                </div>
              </form>
            </div>
          
        </div>
      </div>
		 </div>
</div>		 
				
                    
			  
            </div>

           

        </div>




</body>
</html>