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
  <h2 align="center">My Profile</h2>
   <?php
			session_start();
			include('config.php');
           	
			$Email = $_SESSION['email'];		
			
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
	
		     $result = mysqli_query($dbConn,"SELECT * FROM register WHERE email='$Email'");

					while($row = mysqli_fetch_array($result))
					 {
						 
						 
						echo "<div align='center'>";
						echo "<tr><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Name-</font></STRONG></FONT></td><td>' . $row['Name'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Roll No-</font></STRONG></FONT></td><td align="center">' . $row['Roll_no'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Father Name-</font></STRONG></FONT></td><td align="center">' . $row['Father_Name'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Address-</font></STRONG></FONT></td><td align="center">' . $row['Address'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Mobile No-</font></STRONG></FONT></td><td align="center">'. $row['Mobile_no'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Guardian Name-</font></STRONG></FONT></td><td align="center">' . $row['G_name'] . '</td>';
						echo "</tr>";
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Email Id-</font></STRONG></FONT></td><td align="center">' . $row['email'] . '</td>';
						echo "</tr>";
						echo "</div>";
					  }
						
	    ?>
  </div>
		</section>
  <div class="footer">
    <p>Copyright 2019 | All Rights Reserved</p>
  </div>
</body>
</html> 