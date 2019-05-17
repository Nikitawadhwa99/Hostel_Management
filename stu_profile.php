<?php
     include('config.php');
	 session_start();
	 $Email = $_SESSION['email'];		
			
	 if(!$Email)
		{
		  header("Location:index.php");
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
  <a href="admin_page.php">Student Entry List</a>
  <a href="leave_details.php">Student Leave List</a>
  <a href="visitor_details.php">Visitor List</a>
  <a href="Stu_profile.php">Student Profiles</a>
   <a href="fees_status.php">Fees Status</a>
  <a href="register.php">New Admission</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
   <h4>Student Profiles</h4>
       <?php
			
			if(mysqli_connect_errno())
			  {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			else
				{
					$result = mysqli_query($dbConn,"SELECT * FROM register");
					echo "<table border='4' width='100%' cellspacing='4' id='user'>
					<tr>
					<th>Name</th>
					<th>Roll No</th>
					<th>Father's Name</th>
					<th>Address</th>
					<th>Mobile No</th>
					<th>Tel No</th>
					<th>Category</th>
					<th>Current Class</th>
					<th>Guardian Name</th>
					<th>Guardian Address</th>
					<th>Guardian Mobile No</th>
					<th>Guardian Tel No</th>
					<th>Last Exam Given</th>
					<th>Passing Out Year</th>
					<th>Board Name</th>
					<th>Marks Obtained</th>
					<th>Percentage</th>
					<th>Remark</th>
					<th>Email</th>
					<th>Remove Student</th>
					</tr>";
						while($row = mysqli_fetch_array($result))
						  {
							echo '<tr>
							<td align="center">' . $row['Name'] . '</td>
							<td align="center">' . $row['Roll_no'] . '</td>
							<td align="center">' . $row['Father_Name'] . '</td>
							<td align="center">' . $row['Address'] . '</td>
							<td align="center">' . $row['Mobile_no'] . '</td>
							<td align="center">' . $row['Tel_no'] . '</td>
							<td align="center">' . $row['Category'] . '</td>
							<td align="center">' . $row['Current_class'] . '</td>
							<td align="center">' . $row['G_name'] . '</td>
							<td align="center">' . $row['G_add'] . '</td>
							<td align="center">' . $row['G_mob'] . '</td>
							<td align="center">' . $row['G_tel'] . '</td>
							<td align="center">' . $row['Last_exam'] . '</td>
							<td align="center">' . $row['Year_pass'] . '</td>
							<td align="center">' . $row['Board_name'] . '</td>
							<td align="center">' . $row['Marks_obtain'] . '</td>
							<td align="center">' . $row['Per_marks'] . '</td>
							<td align="center">' . $row['Remarks'] . '</td>
							<td align="center">' . $row['email'] . '</td>
							<td align="center"><a href="remove_student.php?id=' . $row['Id'] . '" style="color:black;">Remove</a></td>
							</tr>';
						  }
							echo "</table>";
				}
						
	    ?>
  </div>
		</section>
  <div class="footer">
    <p>Copyright 2019 | All Rights Reserved</p>
  </div>
</body>
</html> 