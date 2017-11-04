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
								<th>Course Code</th>
								<th>Course Name</th>
								<th>Category</th>
								<th>Professor_Incharge</th>
								<th>Course_Capacity</th>
								<th>Department</th>
								<th>Add course</th>
								<th>Remove course</th>
							</tr>
						</thead>
						<tbody>

						<?php

							    //session_start();
							// Get a connection for the database
							require_once('C:\Apache24\htdocs\mysqli_connect.php');

							// Create a query for the database
							
							$query = "SELECT * FROM courses;";
							$a = $_GET['id'];

							// Get a response from the database by sending the connection
							// and the query
							$response = @mysqli_query($dbc, $query);

							// If the query executed properly proceed
							while ($row = mysqli_fetch_array($response))
							{
								echo "<tr>";
								echo "<td>".$row['Course_Code']."</td>";
								echo "<td>".$row['Course_Name']."</td>";
								echo "<td>".$row['Category']."</td>";
								echo "<td>" .$row['Professor_Incharge']."</td>";
								echo "<td>".$row['Course_Capacity']."</td>";
								echo "<td>".$row['Department']."</td>";
								echo "<td><a href=\"course.php?id=".$a."&code=".$row['Course_Code']."&name=".$row['Course_Name']."\" class=\"edit\">Add course</a></td>";
								echo "<td><a href=\"course1.php?id=".$a."&code=".$row['Course_Code']."&name=".$row['Course_Name']."\" class=\"edit\">Remove course</a></td>";

							    echo "</tr>";
							
						    }
						?>
						
							
						
						</tbody>
					</table>
				</div>
			</div>
		
		
	</body>
</html>











