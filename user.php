
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Student verification</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
	</head>
	<body>
		
					<h1 id="head">Student verification</h1>
		
		<ul id="navigation">
			<li><a href="admin.php">Overview</a></li>
			<li><span class="active">Users</span></li>
			<li><a href="index.html">Logout</a></li>
		</ul>
		
			<div id="content" class="container_16 clearfix">
				
				<div class="grid_16">
					<table>
						<thead>
							<tr>
								<th>Admission No.</th>
								<th>Name</th>
								<th>Marks</th>
								<th>Sex</th>
								<th>DOB</th>
								<th>Branch</th>
								<th>Verify</th>
								<th>Unverify</th>
								<th>Courses</th>
							</tr>
						</thead>
						<tbody>

						<?php

							    //session_start();
							// Get a connection for the database
							require_once('C:\Apache24\htdocs\mysqli_connect.php');

							// Create a query for the database
							
							$query = "SELECT Admission_No,Name,Marks,Sex,DOB,Branch FROM student_college_info";

							// Get a response from the database by sending the connection
							// and the query
							$response = @mysqli_query($dbc, $query);

							// If the query executed properly proceed
							while ($row = mysqli_fetch_array($response))
							{
								echo "<tr>";
								echo "<td>".$row['Admission_No']."</td>";
								echo "<td>".$row['Name']."</td>";
								echo "<td>".$row['Marks']."</td>";
								echo "<td>" .$row['Sex']."</td>";
								echo "<td>".$row['DOB']."</td>";
								echo "<td>".$row['Branch']."</td>";
								echo "<td><a href=\"verify.php?id=".$row['Admission_No']."\" class=\"edit\">Verify</a></td>";
								echo "<td><a href=\"verify1.php?id=".$row['Admission_No']."\" class=\"edit\">Unverify</a></td>";
								echo "<td><a href=\"coursereg.php?id=".$row['Admission_No']."\" class=\"edit\">Courses</a></td>";
							    echo "</tr>";
							
						    }
						?>
						
							
						
						</tbody>
					</table>
				</div>
			</div>
		
		
	</body>
</html>