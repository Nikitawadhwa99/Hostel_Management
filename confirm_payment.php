<?php
   session_start();
    include('config.php');
	 $Total_fee = $_SESSION['Total_fee'];
		 $Amount = $_SESSION['Amount'];
		 
		 $Pending_amt = $Total_fee - $Amount;
	if(isset($_POST['confirm']))
	   {
		 $Email = $_SESSION['email'];
		 $Name=$_SESSION['Name'];
		 $Class = $_SESSION['Class'];
		 $Year = $_SESSION['Year'];
		 $Room_no = $_SESSION['Room_no'];
		 $Payment_mode = $_SESSION['Payment_mode'];
		
		 $Date = $_SESSION['Date'];
	
		   
			   $search_query=mysqli_query($dbConn, "INSERT into pay_fees(Name, Email, Class, Year, Room_no, Payment_mode, Amount, Date, Total_fee ) values 
			   ('$Name','$Email','$Class', '$Year','$Room_no', '$Payment_mode', '$Amount',  '$Date',  '$Total_fee' )");	  
			  
		       header("Location: pay_fees.php");
		   }
		  if (isset($_POST['cancel']))
		{
	  header("Location: user_page.php");	
		}  
	   
?>



<html>
<head>

</head>
<body>
<link rel="stylesheet" href="style.css" type="text/css"/>
<div class="header">
  <h1>HOSTEL MANAGEMENT</h1>
</div>
<section id="section">
<div class="sidenav">
  <a href="user_page.php">My Profile</a>
  <a href="leave_form.php">Leave Application</a>
  <a href="student_leaves_details.php">My Leaves</a>
  <a href="pay_fee.php">Pay fees</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
  <form method="post">
			<table>
			   <tr>
				  <td width="179"><b><font color='#663300'>Name:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Name'];?></font></td>
			  </tr>
			   <tr>
				  <td width="179"><b><font color='#663300'>Class:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Class'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Year:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Year'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Room_no:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Room_no'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Payment_mode:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Payment_mode'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Total Fee:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo "Rs. ". $_SESSION['Total_fee'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Amount:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo "Rs. ".$_SESSION['Amount'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Date:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Date'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Pending Fee:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo "Rs. ". $Pending_amt;?></font></td>
				</tr>
			</table><br>
			    <input type="submit" name="confirm" value="Confirm payment"/><br><br>
				<input type="submit" name="cancel" value="Cancel payment"/>
			</form>
				   
  </div>
		</section>
  <div class="footer">
    <p>Copyright 2019 | All Rights Reserved</p>
  </div>
</body>
</html> 