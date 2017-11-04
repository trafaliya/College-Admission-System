<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Amaryllis 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140131

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />

<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
		    <?php

                 session_start();
// Get a connection for the database
          		 require_once('C:\Apache24\htdocs\mysqli_connect.php');

// Create a query for the database
				 $a1=$_SESSION['uname'];
				 $query = "SELECT * FROM student_college_info where uname='$a1'";
				 
// Get a response from the database by sending the connection
// and the query
				 $response = @mysqli_query($dbc, $query);
				 if($response){
					 $row = mysqli_fetch_array($response);
					 if ($row['verify'])
					 {
					 	

					 	$html = "You have been selected!";

						
					 }
					 else
					 {
					 	$html = "Your selection is pending.";

						
					 }
				 }
			?>
			<h1><a href="#"><?php echo $html; ?></a></h1>
			
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="collegeinfo.php" accesskey="2" title="">College info</a></li>
				<li><a href="enterdetails.html" accesskey="3" title="">Personal info</a></li>
				<li><a href="index.html" accesskey="4" title="">Logout</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="content" class="container_16 clearfix">
				
				<div class="grid_16">
					<table>
						<thead>
							<tr>
								
								<th>Name</th>
								<th>Admission No.</th>
								<th>Marks</th>
								<th>Sex</th>
								<th>DOB</th>
								<th>Branch</th>
								<th>Section</th>
								<th>Roll no.</th>
								<th>Hostel Block</th>
								<th>Mess Block</th>
								<th>Mess Roll No.</th>
							</tr>
						</thead>
						<tbody>

						<?php

							    //session_start();
							// Get a connection for the database
							require_once('C:\Apache24\htdocs\mysqli_connect.php');

							// Create a query for the database
							
							$query = "SELECT Admission_No,Name,Marks,Sex,DOB,Branch,Section,Roll_no,Hostel_Block,Mess_Block,Mess_Rollno FROM student_college_info where uname='$a1'";
							$adm=$row['Admission_No'];
							// Get a response from the database by sending the connection
							// and the query
							$response = @mysqli_query($dbc, $query);

							// If the query executed properly proceed
							while ($row = mysqli_fetch_array($response))
							{
								echo "<tr>";
								echo "<td>".$row['Name']."</td>";
								echo "<td>".$row['Admission_No']."</td>";
								echo "<td>".$row['Marks']."</td>";
								echo "<td>" .$row['Sex']."</td>";
								echo "<td>".$row['DOB']."</td>";
								echo "<td>".$row['Branch']."</td>";
								echo "<td>".$row['Section']."</td>";
								echo "<td>".$row['Roll_no']."</td>";
								echo "<td>".$row['Hostel_Block']."</td>";
								echo "<td>".$row['Mess_Block']."</td>";
								echo "<td>".$row['Mess_Rollno']."</td>";
							    echo "</tr>";
							
						    }
						?>
						
							
						
						</tbody>
					</table>
				</div>
			</div>


<div id="content" class="container_16 clearfix">
				
				<div class="grid_16">
					<table>
						<thead>
							<tr>
								
								<th>Course Code</th>
								<th>Course Name</th>
								
							</tr>
						</thead>
						<tbody>

						<?php

							    //session_start();
							// Get a connection for the database
							require_once('C:\Apache24\htdocs\mysqli_connect.php');

							// Create a query for the database
							
							$query = "SELECT Course_Code,Course_name FROM student_courses where Admission_No='$adm'";

							// Get a response from the database by sending the connection
							// and the query
							$response = @mysqli_query($dbc, $query);

							// If the query executed properly proceed
							while ($row = mysqli_fetch_array($response))
							{
								echo "<tr>";
								echo "<td>".$row['Course_Code']."</td>";
								echo "<td>".$row['Course_name']."</td>";
							    echo "</tr>";
							
						    }
						?>
						
							
						
						</tbody>
					</table>
				</div>
			</div>

</body>
</html>