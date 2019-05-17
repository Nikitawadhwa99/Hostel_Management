<?php
    session_start();
    include('config.php');
	if(isset($_POST['submit']))
	   {
		 $Date=$_POST['Date'];
		 $Name=$_POST['Name'];
		 $Address=$_POST['Address'];
		 $Mobile=$_POST['Mobile'];
		 $Stu_name=$_POST['Stu_name'];
		 $Room_no=$_POST['Room_no'];
		 $Check_in = $_POST['Check_in'];
		 $Check_out = $_POST['Check_out'];
	
		 if($Date!=''||  $Name!=''|| $Address!=''|| $Mobile!=''|| $Stu_name!=''|| $Room_no!=''|| $Check_in!=''|| $Check_out != '')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into visitor(Date, Name, Address, Mobile, Stu_name, Room_no, Check_in,Check_out) values ('$Date', '$Name', '$Address', '$Mobile', '$Stu_name', '$Room_no', '$Check_in', '$Check_out')");	  
		       header("Location: index.php");
		   }
		  else
		   {	    
			   echo "failed";    
		   }   
	   }
	   
?>


<html>
  <body id="homepage">
      <link rel="stylesheet" href="style.css" type="text/css"/>
<div class="header">
  <h1>HOSTEL MANAGEMENT</h1>
</div>
             <div class="entry">
			  <form method="post">
				<h2>Visitors Entry Form:</h2>     
	             <table>
					<tr>
						<td><label>Date:</label><span id="date_error"></span>
						<input type="date" name="Date" id="date"  required / >
						
						<td><label>Name:</label><span id="name_error"></span><br>
						<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="name" placeholder="Enter your name" required / ><br><br>
	                </tr>
					<tr>
					    <td><label>Address:</label><span id="add_error"></span>
						<input type="text" name="Address" pattern="[a-zA-Z ]*$" title="please enter valid address" id="add" placeholder="Enter your address" required />
						
						&nbsp;<td><label>Mobile no:</label><span id="mobile_error"></span><br>
						<input type="text" name="Mobile" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="mobile"  placeholder="Enter your mobile number" required / ><br><br>
					</tr>
					<tr>
						<td><label>Student name:</label><span id="member_name_error"></span>
						<input type="text" name="Stu_name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="Going_In"  placeholder="Enter name " required / >
						
						&nbsp;<td><label>Room number:</label><span id="room_no_error"></span><br>
						<input type="text" name="Room_no" title="please enter valid room number" id="r_no" placeholder="Enter your room number" required / ><br><br>
						
					</tr>
					<tr>
					    
						<td><label>Check_in:</label><span id="Check_in_error"></span><br>
						<input type="time" name="Check_in" id="Check_in" required / ><br><br>
						
						<td><label>Check_out:</label><span id="Check_out_error"></span><br>
						<input type="time" name="Check_out" id="Check_out" required / ><br><br>
					</tr>
					
					<tr>		  
						<td><input type="submit" id="submit" name="submit" value="Save"><br>
						</table>
						<p><font size="4px" color="black">Go to <a href="index.php">homepage</a><br><br>
	          </div>
			  </form>
			  <div>
   <img src="entry.jpg" id="entry_img"/>
  </div>
</div>
            
   <div class="footer">
    <p>Copyright 2019 | All Rights Reserved</p>
  </div>
  </body>
  <style>
  .footer 
{
  background-color: #FF8C00;
  color: #ffffff;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  margin-top:20px;
}
  </style>
</html>
