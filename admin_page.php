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
   <h4>Student Entry List</h4>
     <?php
							
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
				$result = mysqli_query($dbConn,"SELECT * FROM entry");
				echo "<table border='4' width='100%' cellspacing='4' id='user'>
				<tr>
				<th>Name</th>
				<th>Date</th>
				<th>Reason</th>
				<th>Room_no</th>
				<th>Check_out</th>
				<th>Check_in</th>
				
				
				</tr>";
					while($row = mysqli_fetch_array($result))
					  {
						echo "<tr>";
						echo '<td align="center">' . $row['Name'] . '</td>';
						echo '<td align="center">' . $row['Date'] . '</td>';
						echo '<td align="center">' . $row['Reason'] . '</td>';
						echo '<td align="center">' . $row['Room_no'] . '</td>';	
						echo '<td align="center">' . $row['Check_out'] . '</td>';
						echo '<td align="center">' . $row['Check_in'] . '</td>';
						echo "</tr>";
					  }
						echo "</table>";
	    ?>
  </div>
		</section>
  <div class="footer">
    <p>Copyright 2019 | All Rights Reserved</p>
  </div>
</body>
</html> 