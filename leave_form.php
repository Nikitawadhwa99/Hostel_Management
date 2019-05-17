<?php
   session_start();
    include('config.php');
	if(isset($_POST['submit']))
	   {
		 
		 $Name=$_POST['Name'];
		 $Email=$_SESSION['email'];
		 $Room_no = $_POST['Room_no'];
		 $Stay_reason = $_POST['Stay_reason'];
		 $Days = $_POST['Days'];
		 $Date_in = $_POST['Date_in'];
		 $Date_out = $_POST['Date_out'];
		 $colg_name = $_POST['colg_name'];
		 $c_name = $_POST['c_name'];
		 $mob = $_POST['mob'];
		 $p_mob = $_POST['p_mob'];
		 $Address = $_POST['Address'];
		 $Reason = $_POST['Reason'];
		 $Confirmation = "Not Confirm";
	
		 if($Name!=''||  $Date!=''|| $Reason!=''|| $Room_no!=''|| $Check_out != '' || $Check_in != '')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into leave_form(Name, Email, Room_no, Stay_reason, Days, Date_in, Date_out, colg_name, c_name, mob, p_mob , Address, Reason, status ) values ('$Name','$Email','$Room_no', '$Stay_reason', 
			   '$Days', '$Date_in',  '$Date_out', '$colg_name', '$c_name', '$mob', '$p_mob', '$Address', '$Reason' , '$Confirmation' )");	  
		       header("Location: student_leaves_details.php");
		   }
		  else
		   {	    
			   echo "failed";    
		   }   
		
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
  <h3>Student Leave Form</h3>
  <p align="center">Night out Leave Application</p>
    <form method="post"  name="leave_form" onSubmit="return valid();">
      <table>
	    <tr>
		  <b>&nbsp;&nbsp;I</b>&nbsp;&nbsp;<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="first" placeholder="Enter your first name" required / >
		  staying in room number <input type="text" name="Room_no" title="please enter valid room number" id="r_no" placeholder="Enter your room number" required / >
		  of hostel request you to give me a permission for night out <br><br>stay for <input type="text" name="Stay_reason" title="please enter valid reason" id="r_no" placeholder="Enter reason" required / >
		  days <input type="text" name="Days" title="please enter valid days" id="r_no" placeholder="Enter days" required / > from 
          date <input type="date" name="Date_in" title="please enter valid date " id="d_in"  required / > to <input type="date" name="Date_out" title="please enter valid date " id="d_out"  required / >
          <u><br><br>My details are as follows:<br><br></u>		  
		</tr>
		<tr>
		   <td><label>Name of the College:</label><span id="name_error"></span>
		   <input type="text" name="colg_name" pattern="[a-zA-Z ]*$" title="please enter college name" id="clg" placeholder="Enter your college name" required / ><br><br>
		   
		   
		   <td><label>Class and Course:</label><span id="c_error"></span>
		   <input type="text" name="c_name" pattern="[a-zA-Z ]*$" title="please enter class & course name" id="clg" placeholder="Enter your class and course" required / ><br><br>
		</tr>	
		<tr>
		    <td><label>Personal Contact No:</label><span id="per_mobile_error"></span>
			<input type="text" name="mob" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="mobile"  placeholder="Enter your mobile number" required / ><br><br>
		
		    <td><label>Parent Contact No:</label><span id="par_mobile_error"></span>
			<input type="text" name="p_mob" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="mobile"  placeholder="Enter your parent mobile no" required / ><br><br>
		</tr>
		<tr>
		   <td><label>Address during Stay:</label><span id="add_error"></span>
		   <input type="text" name="Address" pattern="[a-zA-Z ]*$" title="please enter reason" id="clg" placeholder="Enter address" required / ><br><br>
		
		   <td><label>Reason for Staying:</label><span id="rea_error"></span>
		   <input type="text" name="Reason" pattern="[a-zA-Z ]*$" title="please enter valid reason" id="clg" placeholder="Enter reason" required / ><br><br>
		</tr>
		<tr>		  
			<td><input type="submit" id="submit" name="submit" value="Submit"><br>
		</tr>
	  </table>
	  	<h3>I am going at my own risk..</h3>
    </form>	
  </div>
		</section>
  <div class="footer">
    <p>Copyright 2019 | All Rights Reserved</p>
  </div>
</body>
</html> 