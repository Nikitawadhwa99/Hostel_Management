<?php
    session_start();
    include('config.php');
	if(isset($_POST['submit']))
	   {
		 $Name=$_POST['Name'];
		 $Roll_no=$_POST['Roll_no'];
		 $Father_name=$_POST['Father_name'];
		 $Address = $_POST['Address'];
		 $Mobile_no = $_POST['Mobile_no'];
		 $Tel_no = $_POST['Tel_no'];
		 $Category = $_POST['Category'];
		 $Current_class= $_POST['Current_class'];
		 $G_name= $_POST['G_name'];
		 $G_add= $_POST['G_add'];
		 $G_mob= $_POST['G_mob'];
	     $G_tel= $_POST['G_tel'];
		 $Last_exam= $_POST['Last_exam'];
		 $Year_pass= $_POST['Year_pass'];
		 $Board_name= $_POST['Board_name'];
		 $Marks_obtain= $_POST['Marks_obtain'];
		 $Per_marks= $_POST['Per_marks'];
		 $Remarks= $_POST['Remarks'];
		 $S_name= $_POST['S_name'];
		 $L_name= $_POST['L_name'];
		 $Class= $_POST['Class'];
		 $Email= $_POST['email'];
		 $password= $_POST['password'];
		 $confirm_password= $_POST['confirm_password'];
	
		 if($Name!=''|| $Roll_no!=''|| $Father_name!=''|| $Address!=''|| $Mobile_no!=''|| $Tel_no!=''|| $Category!=''|| $Current_class=''|| $G_name=''|| 
		 $G_add=''|| $G_mob='' || $G_tel='' || $Last_exam='' || $Year_pass='' ||$Board_name='' ||$Marks_obtain='' ||$Per_marks='' ||$Remarks='' ||
		 $S_name='' ||$L_name='' ||$Class='' ||$Email=''|| $password=''|| $confirm_password='' )
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into register(Name, Roll_no, Father_name, Address, Mobile_no, Tel_no, Category, Current_class, G_name, G_add, G_mob, G_tel, 
										  Last_Exam, Year_pass, Board_name, Marks_obtain, Per_marks, Remarks, S_name, L_name, Class,Email, password, confirm_password) 
										  values ('$Name','$Roll_no','$Father_name','$Address', '$Mobile_no', '$Tel_no', '$Category','$Current_class',
										  '$G_name','$G_add','$G_mob','$G_tel','$Last_exam','$Year_pass','$Board_name','$Marks_obtain','$Per_marks',
										  '$Remarks','$S_name','$L_name','$Class','$Email','$password','$confirm_password')");	  
		       header("Location: index.php");
		   }
		
		  else
		   {	    
			   echo "failed";    
		   }   
			
	   }
?>


<html>
	<head>
		<script>
			function valid()
			{
			if(document.registration.password.value!= document.registration.confirm_password.value)
			{
			alert("Password and Re-Type Password Field do not match  !!");
			document.registration.confirm_password.focus();
			return false;
			}
			return true;
			}
		</script>
	</head>
  <body id="homepage">
      <link rel="stylesheet" href="style.css" type="text/css"/>
	    <div class="header">
		  <h1>HOSTEL MANAGEMENT</h1>
        </div>
        <div class="reg">
            <form method="post"  name="registration" onSubmit="return valid();">
				<h2 align="left" style="color:black;">HOSTEL REGISTRATION FORM FOR ADMISSION:</h2>     
	             <table>
					<tr>
						<td><label>Name:</label><span id="first_error"></span><br>
						<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="first" placeholder="Enter your first name" required / ><br><br>
						  
						<td><label>Roll No:</label><span id="middle_error"></span><br>
						<input type="text" name="Roll_no" title="please enter valid roll no" id="roll_no" placeholder="Enter your roll_no" required / ><br><br>

						<td><label>Father's Name:</label><span id="last_error"></span><br>
						<input type="text" name="Father_name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="f_name" placeholder="Enter your father name" required / ><br><br>
					</tr>
					
					<tr>
					
					<td><label>Permanent Address:</label><span id="dob_error"></span><br>
						<input type="text" name="Address" title="please enter valid date of birth" id="add"  placeholder="Enter your address" required / ><br><br>
					
					
					<td><label>Mobile No:</label><span id="age_error"></span><br>
					    <input type="text" name="Mobile_no"  pattern = "[0-9]{10}" title="please enter valid mobile" id="mob" placeholder="Enter your mobile no" required / ><br><br>
						
					<td><label>Telephone No:</label><span id="age_error"></span><br>
					    <input type="text" name="Tel_no"  pattern = "[0-9]{10}" title="please enter valid no" id="tel" placeholder="Enter your telephone no"><br><br>
						 
					</tr>	
					
					<tr>
					
						
					<td><label>Category:</label><span id="dob_error"></span><br>
						<input type="text" name="Category" title="please enter valid date of birth" id="cat"  placeholder="Enter your category" required / ><br><br>
							 
							 
						<td><label>Current Class:</label><span id="course_error"></span><br>
						<input type="text" name="Current_class" title="please enter valid course" id="class" placeholder="Enter your class" required / ><br><br>
							 
							 
						<td><label>Guardian Name:</label><span id="year_error"></span><br>
						<input type="text" name="G_name" title="please enter valid year" id="g_name" placeholder="Enter your guardian name" required / ><br><br>
						
					</tr>
					
					<tr>
					
						<td><label>Guardian Address:</label><span id="date_error"></span><br>
						<input type="text" name="G_add" title="please enter valid date" id="g_add" placeholder="Enter your guardian address" required / ><br><br>
						
						<td><label>Guardian Mobile no:</label><span id="mobile_error"></span><br>
						<input type="text" name="G_mob" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="g_mobile"  placeholder="Enter your guardian mobile number" required / ><br><br>
								
						<td><label>Guardian Tel no:</label><span id="mobile_error"></span><br>
						<input type="text" name="G_tel" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="g_tel"  placeholder="Enter your guardian tel number" ><br><br>
						
					</tr>
					
					<tr>
					
						<td><label>Last Examination:</label><span id="address_error"></span><br>
						<input type="text" name="Last_exam" title="please enter valid address" id="last_exam" placeholder="Enter your last examination" required / ><br><br>
						
						<td><label>Year of Passing:</label><span id="p_name_error"></span><br>
						<input type="text" name="Year_pass" title="please enter valid name" id="year_pass" placeholder="Enter your year of passing" required / ><br><br>
						
						<td><label>Name of Board:</label><span id="p_mob_error"></span><br>
						<input type="text" name="Board_name" title="please enter valid mobile no" id="board_name" placeholder="Enter your name of board" required / ><br><br>
						
					</tr>
					
					<tr>
					
						<td><label>Marks Obtained:</label><span id="local_error"></span><br>
						<input type="text" name="Marks_obtain" title="please enter valid name" id="m_obtain" placeholder="Enter your marks" required / ><br><br>
						
						<td><label>% of Marks:</label><span id="g_mob_error"></span><br>
						<input type="text" name="Per_marks" title="please enter valid mobile" id="per_mark" placeholder="Enter your %" required / ><br><br>
						
						<td><label>Remarks:</label><span id="g_add_error"></span><br>
						<input type="text" name="Remarks" title="please enter valid address" id="remark" placeholder="Enter your remark" required / ><br><br>
						
					</tr>
					<tr>
					
					   <td><label>Email:</label><br>
		               <input type="email" name="email" id="email"  placeholder="Enter your Email_ID" required / >
						
						<td><label>Password:</label><span id="password_error"></span>
						<input type="Password" name="password" id="password" placeholder="Enter your password" required / ></td>
						
						<td><label>Confirm Password:</label><span id="confirm_password_error"></span>
						<input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter your password" required / ></td>
					</tr>		  
		          </table>
	                    <h2 style="color:black;">UNDERTAKING</h2>
						<p style="color:black;">I&nbsp;<input type="text" name="S_name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="l_name" placeholder="Enter your first name" required / >
							s/o<input type="text" name="L_name" title="please enter valid last name" id="s_name" placeholder="Enter your last name" required / >
							Class<input type="text" name="Class" title="please enter valid class" id="class" placeholder="Enter class" required / >
							Hereby declare that information submitted in this application to the best of my knowledge and belief, I undertake to abide
							by all the hostel rules of college and shall not indulge in ragging, if caught, I shall gracefully accept any punishment
							awarded by Committee in this regard.
						</p><br>
						 <td><label>Date:</label><span id="date_error"></span>
						<input type="date" name="Date" id="date"  required / ></td><br><br>
						<input type="submit" id="submit" name="submit" value="Register"><br>
            </form>
         </div>
		  <div id="info">
			<h2>Declaration by Student</h2>
			<ul>
				<li>I agree not to indulge in groupism of any type and would live in harmony with others in the hostel.</li><br>
				<li>I understand that smoking and consumption of alcohol and other objectionable material in the hostels is strictly prohibited and I
				will abstain from such acts.</li><br>
				<li>I declare that indulgence in any anti-instutional or anti-social activity in the hostel is highly punishable and I will be liable for
				severe penalties and punishments for indulging in such acts.</li><br>
				<li>I declare that I am physically and medically t to live in the hostel.</li><br>
				<li>I will not hold the management, college authorities, or the hostel authorities
				responsible for any consequence which will be a result of my non-disclosure.</li><br>
			</ul>
          </div>

  <div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>
