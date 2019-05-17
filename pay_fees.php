<?php
      
	session_start();
	include('config.php');
	
	   if(isset($_POST['submit']))
	   {		  
		 
		  $_SESSION['Name']=$_POST['Name'];
		  $_SESSION['Class']=$_POST['Class'];
          $_SESSION['Year']=$_POST['Year'];
		  $_SESSION['Room_no']=$_POST['Room_no'];
		  $_SESSION['Payment_mode']=$_POST['Payment_mode'];	
		  $_SESSION['Total_fee']="58000"; 
          $_SESSION['Amount']=$_POST['Amount'];
		  $_SESSION['Date']=$_POST['Date'];
	
	
		   header("Location: confirm_payment.php");
			  
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
  <a href="pay_fees.php">Pay fees</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
   <form method="post">
				<h2 align="center" style="color:black;">Pay Fees:</h2>     
	             <table align="center">
				 
				 <tr>
				    <td><label>Name:</label><span id="date_error"></span><br>
						<input type="text" name="Name" title="please enter valid date" id="date"  placeholder="Enter your name" required / ><br><br>
					
					    <td><label>Class:</label><span id="plot_error"></span><br>
						<input type="text" name="Class" title="please enter valid plot_no" id="plot" placeholder="Enter your class" required / ><br><br>
				 </tr>
		
					<tr>	 	
						<td><label>Year:</label><span id="date_error"></span><br>
						<input type="text" name="Year" title="please enter valid date" id="date"  placeholder="Enter your year of class " required / ><br><br>
					
					    <td><label>Room_no:</label><span id="plot_error"></span><br>
						;<input type="text" name="Room_no" title="please enter valid plot_no" id="plot" placeholder="Enter your room number" required / ><br><br>
					</tr>
					
					<tr>
						<td><label>Payment mode:</label>
						 <br><Select name="Payment_mode" id="pay" required>
							<option disabled selected value>--Select--</option>
							<option value="Cash">Cash</option>
						 </Select><br><br>  
						
						<td><label>Total Fee :-</label> <b>Rs. 58000 </b>
						<br><br>  
						 
						 
					</tr>
					<tr>	 	
						<td><label>Pay Fee Amount:</label><span id="date_error"></span><br>
						<input type="text" name="Amount" title="please enter valid date" id="date"placeholder="Enter amount"  required / ><br><br></td>
					
					    <td><label>Date:</label><span id="plot_error"></span><br>
						<input type="date" name="Date" title="please enter valid plot_no" id="plot" placeholder="Enter date" required / ><br><br> </td>
					</tr>
					
					<tr>
					
					</table>
						<p align="center"><input type="submit" value="Pay" name="submit"/></p>
						
						<p align="center"><a href="student_fees_status.php" ><div>Pay Pending Fee </div> </a></p>
						
						
	          </div>
			  </table>
			  </form>	
  </div>
		</section>
  <div class="footer">
    <p>Copyright 2019 | All Rights Reserved</p>
  </div>
</body>
</html> 