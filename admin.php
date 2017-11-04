<!DOCTYPE html>

<?php
    require_once('C:\Apache24\htdocs\mysqli_connect.php');
//if(isset($_POST['submit'])){
    session_start();


    
    $uname=$_SESSION['uname'];
    $data_missing = array();

    $q1 = "SELECT Admission_no as 'count' FROM student_college_info where uname='$uname'";
    $r1 = mysqli_query($dbc, $q1);
    $row = mysqli_fetch_array($r1);
    $adm=$row['count'];
    
    $q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='1'";
    $q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='2'";
    $q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='7'";
    $r1 = mysqli_query($dbc, $q1);
    $r2 = mysqli_query($dbc, $q2);
    $r3 = mysqli_query($dbc, $q3);
    $row = mysqli_fetch_array($r1);
    $h1 = $row['count'];
    $row = mysqli_fetch_array($r2);
    $h2 = $row['count'];
    $row = mysqli_fetch_array($r3);
    $h3 = $row['count'];

    $q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='1'";
    $q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='2'";
    $q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='7'";
    $r1 = mysqli_query($dbc, $q1);
    $r2 = mysqli_query($dbc, $q2);
    $r3 = mysqli_query($dbc, $q3);
    $row = mysqli_fetch_array($r1);
    $m1 = $row['count'];
    $row = mysqli_fetch_array($r2);
    $m2 = $row['count'];
    $row = mysqli_fetch_array($r3);
    $m3 = $row['count'];


    $q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='1'";
    $q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='2'";
    $q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='3'";
    $q4 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='4'";
    $q5 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='5'";
    $q6 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='6'";
    $q7 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='7'";
    $q8 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='8'";
    $q9 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='9'";
    $q10 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='10'";
    $q11 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='11'";
    $q12 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Section='12'";


    $r1 = mysqli_query($dbc, $q1);
    $r2 = mysqli_query($dbc, $q2);
    $r3 = mysqli_query($dbc, $q3);
    $row = mysqli_fetch_array($r1);
    $s1 = $row['count'];
    $row = mysqli_fetch_array($r2);
    $s2 = $row['count'];
    $row = mysqli_fetch_array($r3);
    $s3 = $row['count'];

    $r4 = mysqli_query($dbc, $q4);
    $r5 = mysqli_query($dbc, $q5);
    $r6 = mysqli_query($dbc, $q6);
    $row = mysqli_fetch_array($r4);
    $s4 = $row['count'];
    $row = mysqli_fetch_array($r5);
    $s5 = $row['count'];
    $row = mysqli_fetch_array($r6);
    $s6 = $row['count'];

    $r7 = mysqli_query($dbc, $q7);
    $r8 = mysqli_query($dbc, $q8);
    $r9 = mysqli_query($dbc, $q9);
    $row = mysqli_fetch_array($r7);
    $s7 = $row['count'];
    $row = mysqli_fetch_array($r8);
    $s8 = $row['count'];
    $row = mysqli_fetch_array($r9);
    $s9 = $row['count'];

    $r10 = mysqli_query($dbc, $q10);
    $r11 = mysqli_query($dbc, $q11);
    $r12 = mysqli_query($dbc, $q12);
    $row = mysqli_fetch_array($r10);
    $s10 = $row['count'];
    $row = mysqli_fetch_array($r11);
    $s11 = $row['count'];
    $row = mysqli_fetch_array($r12);
    $s12 = $row['count'];

    ?>


	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if IE]><![if gte IE 6]><![endif]-->
		
		<!--[if IE]><![endif]><![endif]-->
	</head>
	<body>

		<h1 id="head">College admission system - Admin</h1>
		
		<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="user.php">Students</a></li>
			<li><a href="index.html">Logout</a></li>
		</ul>

			<div id="content" class="container_16 clearfix">
				<div class="grid_5">
					<div class="box">
						<h2>Admin</h2>
						
						<p><strong>Last Signed In : </strong> <?php date_default_timezone_set('Asia/Kolkata');
																	$date = date('m/d/Y h:i:s a', time());
																	echo $date ?><br /><strong>IP Address : </strong> <?php echo $_SERVER['SERVER_NAME'] ?></p>
					</div>
					<div class="box">
						<h2>Mess </h2>
						
						<table>
							<tbody>
								<tr>
									<td>Block 1</td>
									<td> <?php echo $m1; ?> /450</td>
								</tr>
								<tr>
									<td>Block 2</td>
									<td><?php echo $m2; ?> /450</td>
								</tr>
								<tr>
									<td>Block 7</td>
									<td><?php echo $m3; ?> /400</td>


								</tr>
								
							</tbody>
						</table>
					</div>
					
				</div>
				<div class="grid_6">
					<div class="box">
						<h2>Sections</h2>
						
						<table>
							<tbody>
								<tr>
									<td>Section 1</td>
									<td> <?php echo $s1; ?> /70</td>
								</tr>
								<tr>
									<td>Section 2</td>
									<td> <?php echo $s2; ?> /70</td>
								</tr>
								<tr>
									<td>Section 3</td>
									<td> <?php echo $s3; ?> /70</td>
								</tr>
								<tr>
									<td>Section 4</td>
									<td> <?php echo $s4; ?> /70</td>
								</tr>
								<tr>
									<td>Section 5</td>
									<td> <?php echo $s5; ?> /70</td>
								</tr>
								<tr>
									<td>Section 6</td>
									<td> <?php echo $s6; ?> /70</td>
								</tr>
								<tr>
									<td>Section 7</td>
									<td> <?php echo $s7; ?> /70</td>
								</tr>
								<tr>
									<td>Section 8</td>
									<td> <?php echo $s8; ?> /70</td>
								</tr>
								<tr>
									<td>Section 9</td>
									<td> <?php echo $s9; ?> /70</td>
								</tr>
								<tr>
									<td>Section 10</td>
									<td> <?php echo $s10; ?> /70</td>
								</tr>
								<tr>
									<td>Section 11</td>
									<td> <?php echo $s11; ?> /70</td>
								</tr>
								<tr>
									<td>Section 12</td>
									<td> <?php echo $s12; ?> /70</td>
								</tr>
								
								
							</tbody>
						</table>
					</div>
					
				</div>
				<div class="grid_5">
					<div class="box">
						<h2>Hostel blocks</h2>
						
						<table>
							<tbody>
								<tr>
									<td>Block 1</td>
									<td> <?php echo $h1; ?> /450</td>
								</tr>
								<tr>
									<td>Block 2</td>
									<td><?php echo $h2; ?> /400</td>
								</tr>
								<tr>
									<td>Block 7</td>
									<td><?php echo $h3; ?> /75</td>


								</tr>
								
							</tbody>
						</table>
					</div>
					<div class="box">
						<h2>Schedule</h2>
						
						<table class="date">
							<caption>November 2017 </caption>
							<thead>
								<tr>
									<th>Mon</th>
									<th>Tue</th>
									<th>Wed</th>
									<th>Thu</th>
									<th>Fri</th>
									<th>Sat</th>
									<th>Sun</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><a href="#">1</a></td>
								</tr>
								<tr>
									<td><a href="#" class="active">2</a></td>
									<td><a href="#">3</a></td>
									<td><a href="#">4</a></td>
									<td><a href="#">5</a></td>
									<td><a href="#">6</a></td>
									<td><a href="#">7</a></td>
									<td><a href="#">8</a></td>
								</tr>
								<tr>
									<td><a href="#">9</a></td>
									<td><a href="#">10</a></td>
									<td><a href="#">11</a></td>
									<td><a href="#">12</a></td>
									<td><a href="#">13</a></td>
									<td><a href="#">14</a></td>
									<td><a href="#">15</a></td>
								</tr>
								<tr>
									<td><a href="#">16</a></td>
									<td><a href="#">17</a></td>
									<td><a href="#">18</a></td>
									<td><a href="#">19</a></td>
									<td><a href="#">20</a></td>
									<td><a href="#">21</a></td>
									<td><a href="#">22</a></td>
								</tr>
								<tr>
									<td><a href="#">23</a></td>
									<td><a href="#">24</a></td>
									<td><a href="#">25</a></td>
									<td><a href="#">26</a></td>
									<td><a href="#">27</a></td>
									<td><a href="#">28</a></td>
									<td><a href="#">29</a></td>
								</tr>
								<tr>
									<td><a href="#">30</a></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		
	</body>
</html>