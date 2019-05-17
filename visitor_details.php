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
   <h4>Visitor's List</h4>
     <?php
		session_start();
			include('config.php');
							
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
				$result = mysqli_query($dbConn,"SELECT * FROM visitor");
				echo "<table border='4' width='100%' cellspacing='4' id='user'>
				<tr>
				<th>Date</th>
				<th>Name</th>
				<th>Address</th>
				<th>Mobile</th>
				<th>Stu_name</th>
				<th>Room_no</th>
				<th>Check_in</th>
				<th>Check_out</th>
				
				</tr>";
					while($row = mysqli_fetch_array($result))
					  {
						echo "<tr>";
						echo '<td align="center">' . $row['Date'] . '</td>';
						echo '<td align="center">' . $row['Name'] . '</td>';
						echo '<td align="center">' . $row['Address'] . '</td>';
						echo '<td align="center">' . $row['Mobile'] . '</td>';
						echo '<td align="center">' . $row['Stu_name'] . '</td>';
						echo '<td align="center">' . $row['Room_no'] . '</td>';	
						echo '<td align="center">' . $row['Check_in'] . '</td>';
						echo '<td align="center">' . $row['Check_out'] . '</td>';
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