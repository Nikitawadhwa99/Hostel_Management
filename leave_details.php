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
   <h4>Student Leave List</h4>
     <?php
		session_start();
			include('config.php');
							
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
				$result = mysqli_query($dbConn,"SELECT * FROM leave_form");
				echo "<table border='4' width='100%' cellspacing='4' id='user'>
				<tr>
				<th>Name</th>
				<th>Room_no</th>
				<th>Stay_reason</th>
				<th>Days</th>
				<th>Date_in</th>
				<th>Date_out</th>
				<th>College_name</th>
				<th>Class & Course_name</th>
				<th>Personal No</th>
				<th>Parents No</th>
				<th>Address</th>
				<th>Reason</th>
				<th>Status</th>
				<th>Confirm</th>
				
				</tr>";
					while($row = mysqli_fetch_array($result))
					  {
						echo "<tr>";
						echo '<td align="center">' . $row['Name'] . '</td>';
						echo '<td align="center">' . $row['Room_no'] . '</td>';
						echo '<td align="center">' . $row['Stay_reason'] . '</td>';
						echo '<td align="center">' . $row['Days'] . '</td>';
						echo '<td align="center">' . $row['Date_in'] . '</td>';
						echo '<td align="center">' . $row['Date_out'] . '</td>';	
						echo '<td align="center">' . $row['colg_name'] . '</td>';
						echo '<td align="center">' . $row['c_name'] . '</td>';
						echo '<td align="center">' . $row['mob'] . '</td>';
						echo '<td align="center">' . $row['p_mob'] . '</td>';
						echo '<td align="center">' . $row['Address'] . '</td>';
						echo '<td align="center">' . $row['Reason'] . '</td>';
						echo '<td align="center">' . $row['status'] . '</td>';
						echo '<td align="center"><a href="confirm_leaves.php?id='.$row['Id'].'" > Done </a></td>';
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