<?php
    session_start();
    include('config.php');
	
    if(isset($_POST['submit']))
		{		
			$email=$_POST['email'];
			$password = $_POST['password'];
			
           $_SESSION['email']=$email;	
		   
			$search_query=mysqli_query($dbConn,"select * from register where email='$email' and password='$password'");
				if(mysqli_num_rows($search_query)<1)
				{
					$found="";
				}
				else
				{
					$_SESSION["login"]=$email;
					$_SESSION["login"]=$password;
				}
				if (isset($_SESSION["login"]))
				{
				   header("Location: user_page.php");
				}
				elseif ($email=="admin@gmail.com" && $password=="admin")
				{
				   header("Location: admin_page.php");
				}
				else
				{
				   echo "Incorrect";	
				}
		}
		
?>


<html>
<head>

</head>
<body>
<link rel="stylesheet" href="style.css" type="text/css"/>
<div class="header">
  <h1>HOSTEL MANAGEMENT SYSTEM</h1>
</div>


<div class="row">
	 <div class="aside">
	 <form method="post">
     <h2>Login:</h2>						       
		<td><label>Email:</label><br>
		<input type="email" name="email" id="email"  placeholder="Enter your Email_ID" required / ><br><br>
		<label for="password">Password:</label><br>
		<input type="password" placeholder="Password" id="password" name="password" required / ><br><br>
		<input type="submit" id="submit" name="submit" value="Login"><br>
		<p>Entry Form <a href="entry_form.php">Entry</a></p>
		<p>Visitors Entry <a href="visitor_form.php">Form</a></p>
		</form>
  </div>

  <div>
   <img src="hostel.jpg" id="img"/>
  </div>
</div>

<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>

</body>
</html>