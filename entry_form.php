<?php
   session_start();
    include('config.php');
	if(isset($_POST['submit']))
	   {
		 $Name=$_POST['Name'];
		 $Date=$_POST['Date'];
		 $Reason = $_POST['Reason'];
		 $Room_no = $_POST['Room_no'];
		 $Check_out = $_POST['Check_out'];
		 $Check_in = $_POST['Check_in'];
	
		 if($Name!=''||  $Date!=''|| $Reason!=''|| $Room_no!=''|| $Check_out != '' || $Check_in != '')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into entry(Name, Date, Reason, Room_no, Check_out, Check_in) values ('$Name','$Date','$Reason', '$Room_no', '$Check_out', '$Check_in')");	  
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
				<h2>Entry Form:</h2>     
	             <table>
					<tr>	 
						<td><label>Name:</label><span id="name_error"></span><br>
						<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="name" placeholder="Enter your name" required / >
	
						&nbsp;<td><label>Date:</label><span id="date_error"></span>
						<input type="date" name="Date" id="date"  required / ><br><br>
					</tr>
					
					<tr>	 
						<td><label>Reason for going out:</label><span id="name_error"></span><br>
						<input type="text" name="Reason" pattern="[a-zA-Z ]*$" title="please enter valid reason" id="name" placeholder="Enter valid reason" required / ><br><br>
	
						<td><label>Room no:</label><span id="mobile_error"></span><br>
						<input type="text" name="Room_no" title="please enter valid room_number" id="mobile"  placeholder="Enter your room number" required / ><br><br>
					</tr>
					<tr>  
						
						<td><label>Out_time:</label><span id="Check_out_error"></span><br>
						<input type="time" name="Check_out" id="Check_out" placeholder="Check_out time" required / ><br><br>
						
						<td><label>In_time:</label><span id="Check_out_error"></span><br>
						<input type="time" name="Check_in" id="Check_in" placeholder="Check_in time" required / ><br><br>
					</tr>
					<tr>		  
						<td><input type="submit" id="submit" name="submit" value="Save"><br>
					</tr>
						</table>
						<p><font size="4px" color="black">Go to <a href="index.php">homepage</a><br><br>
						<b>Note:You must fill all the information correctly,this is due to the safety purpose.</font></p></b>
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
