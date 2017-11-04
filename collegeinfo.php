<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/style5.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
    
  
</head>

<?php
session_start();
// Get a connection for the database
require_once('C:\Apache24\htdocs\mysqli_connect.php');

// Create a query for the database
$a1=$_SESSION['uname'];

$q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='1'";
$q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='2'";
$q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Hostel_Block='7'";
$r1 = @mysqli_query($dbc, $q1);
$r2 = @mysqli_query($dbc, $q2);
$r3 = @mysqli_query($dbc, $q3);
$row = mysqli_fetch_array($r1);
$h1 = $row['count'];
$row = mysqli_fetch_array($r2);
$h2 = $row['count'];
$row = mysqli_fetch_array($r3);
$h3 = $row['count'];

$q1 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='1'";
$q2 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='2'";
$q3 = "SELECT count(Admission_no) as 'count' FROM student_college_info where Mess_Block='7'";
$r1 = @mysqli_query($dbc, $q1);
$r2 = @mysqli_query($dbc, $q2);
$r3 = @mysqli_query($dbc, $q3);
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


$r1 = @mysqli_query($dbc, $q1);
$r2 = @mysqli_query($dbc, $q2);
$r3 = @mysqli_query($dbc, $q3);
$row = mysqli_fetch_array($r1);
$s1 = $row['count'];
$row = mysqli_fetch_array($r2);
$s2 = $row['count'];
$row = mysqli_fetch_array($r3);
$s3 = $row['count'];

$r4 = @mysqli_query($dbc, $q4);
$r5 = @mysqli_query($dbc, $q5);
$r6 = @mysqli_query($dbc, $q6);
$row = mysqli_fetch_array($r4);
$s4 = $row['count'];
$row = mysqli_fetch_array($r5);
$s5 = $row['count'];
$row = mysqli_fetch_array($r6);
$s6 = $row['count'];

$r7 = @mysqli_query($dbc, $q7);
$r8 = @mysqli_query($dbc, $q8);
$r9 = @mysqli_query($dbc, $q9);
$row = mysqli_fetch_array($r7);
$s7 = $row['count'];
$row = mysqli_fetch_array($r8);
$s8 = $row['count'];
$row = mysqli_fetch_array($r9);
$s9 = $row['count'];

$r10 = @mysqli_query($dbc, $q10);
$r11 = @mysqli_query($dbc, $q11);
$r12 = @mysqli_query($dbc, $q12);
$row = mysqli_fetch_array($r10);
$s10 = $row['count'];
$row = mysqli_fetch_array($r11);
$s11 = $row['count'];
$row = mysqli_fetch_array($r12);
$s12 = $row['count'];




// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){
$row = mysqli_fetch_array($response);
}

?>
<tr><td> <input type="hidden" name="type" value="<?php echo 'Hi' ?>" ></td></tr>
    <body>
      
      <form action="addcollege.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your college info:</legend>
          
        <label for="hostel">Select Hostel Block:</label> 
        
        <select id="hostel" name="hostel_block">
     
            <option value="1">Block 1 <?php echo $h1; ?> /450</option>   
            <option value="2">Block 2 <?php echo $h2; ?> /400</option>
            <option value="7">Block 7 <?php echo $h3; ?> /75</option>
        </select>

        <label for="hostel">Select Mess Block:</label> 
        
        <select id="hostel" name="mess_block">
     
            <option value="1">Block 1 <?php echo $m1; ?> /450</option>   
            <option value="2">Block 2 <?php echo $m2; ?> /450</option>
            <option value="7">Block 7 <?php echo $m3; ?> /400</option>
        </select>

        <label for="hostel">Select Section:</label> 
        
        <select id="hostel" name="section">
     
            <option value="1">Section 1 <?php echo $s1; ?> /70</option>   
            <option value="2">Section 2 <?php echo $s2; ?> /70</option>  
            <option value="3">Section 3 <?php echo $s3; ?> /70</option>  
            <option value="4">Section 4 <?php echo $s4; ?> /70</option>  
            <option value="5">Section 5 <?php echo $s5; ?> /70</option>  
            <option value="6">Section 6 <?php echo $s6; ?> /70</option>  
            <option value="7">Section 7 <?php echo $s7; ?> /70</option>  
            <option value="8">Section 8 <?php echo $s8; ?> /70</option>  
            <option value="9">Section 9 <?php echo $s9; ?> /70</option>  
            <option value="10">Section 10 <?php echo $s10; ?> /70</option>  
            <option value="11">Section 11 <?php echo $s11; ?> /70</option>  
            <option value="12">Section 12 <?php echo $s12; ?> /70</option>  
          
        </select>
        
          
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>
  

