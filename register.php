

<!-- Register form -->

<html >
<head>
<meta charset="UTF-8">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style5.css">
    <title>Register</title>

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
   background-color: #04AA6D;
   margin-left:10px;
}









* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
#ar
{
border: 1px solid black;
  border-radius: 1.4rem;
   background-color:#fff;
   width:130px;
 text-align: center;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}


</style>  
  
    
      
  
    
 </head>
 <body>

<div id="ar">


<a href="register_ar.php">عربي</a>
||
<a href="register.php">English</a> </div >


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
                
			<div class="card">	
            
                <div class="skill-pic">
				<div class="container">
				<div class="box">
    <div class="row">
      <div class="col s12 m12">
      
		
         
       
        
         
         
            <div class="row"> 
			
			
			
			
			
			<form  method="POST" action="add_user.php"  enctype="multipart/form-data" novalidate style="border:1px solid #ccc">
  <div class="container">
     <center>   <h1 id="hh">Sing Up </h1></center>
				<h5>Greate an account to continue</h5> <hr>
    <label for="email"><b>Your Full Name</b></label>
    <input type="text" placeholder="Enter Your Full Name" name="name" required>
 
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="email"><b>Your Phone</b></label>
    <input type="text" placeholder="Enter phone" name="phone" required>
   

    <label for="email" id="oo" id="oo">Nationality</label>
                    <div class="input-field">
                  <select    name="Nationality" size="1">
<option value="Tunisia">Tunisia
<option value="Somalia">Somalia
<option value="Algeria">Algeria
<option value="Libya">Libya
<option value="Emirates">Emirates
<option value="Jubbuti">Jubbuti
<option value="Saudi_Arabia">Saudi Arabia
<option value="Qatar">Qatar
<option value="Kuwait">Kuwait
<option value="Oman">Oman
<option value="Mauritania">Mauritania
<option value="Jordan">Jordan
<option value="Lebanon">Lebanon
</select>

    <div class="clearfix">
      
         <center>   Already register? <a href="login.php">Login</a><br><br>
		 
		 
		 <button type="submit" id="bt" class="waves-effect waves-light btn green" name="submit">Register</button>
                             </center>  
    </div>
  </div>
</form>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
				
				 
				
			   
				  
   
            
            </div>
         
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</body>
</html>
