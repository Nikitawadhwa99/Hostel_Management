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
   <h4>Student Fees Status</h4>
     <?php
							
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
				$result = mysqli_query($dbConn,"SELECT * FROM pay_fees");
				echo "<table border='4' width='100%' cellspacing='4' id='user'>
				
				<tr>
				
				
				<th>Name</th>
				<th>Class</th>
				<th>Year</th>
				<th>Room_no</th>
				<th>Payment Mode</th>
				<th>Date</th>
				<th>Paid Amount</th>
				<th>Total Amount</th>
				<th>Pending Amount</th>
				
				
				
				</tr>";
					while($row = mysqli_fetch_array($result))
					  {
							$total = $row['Total_fee'];
							$paid = $row['Amount'];
							$pending = $total-$paid;
							
						echo "<tr>";
						echo '<td align="center">' . $row['Name'] . '</td>';
						echo '<td align="center">' . $row['Class'] . '</td>';
						echo '<td align="center">' . $row['Year'] . '</td>';
						echo '<td align="center">' . $row['Room_no'] . '</td>';	
						echo '<td align="center">' . $row['Payment_mode'] . '</td>';
						echo '<td align="center">' . $row['Date'] . '</td>';
						echo '<td align="center">' . $row['Amount'] . '</td>';
						echo '<td align="center">' . $row['Total_fee'] . '</td>';
						echo '<td align="center">' .  $pending . '</td>';
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