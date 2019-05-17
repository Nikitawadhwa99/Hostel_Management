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
   <h4>My Leave Details</h4>
     <?php
		session_start();
			include('config.php');
							$Email = $_SESSION['email'];
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
				$result = mysqli_query($dbConn,"SELECT * FROM leave_form where Email='$Email'");
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