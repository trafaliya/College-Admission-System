<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            width: 760px;
            padding: 50px 0;
            margin: 0 auto;
            font-family: Calibri, sans-serif;
        }

        .nav {

            border: 1px solid #ccc;
            border-width: 1px 0;
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .nav li {
            position: relative;
            display: inline;
        }

        .nav a {
            display: inline-block;
            padding: 10px;
        }

        a {
            color: #c00;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <ul class="nav">
        <li>
            <a class="active" href="#home">Home</a>
        </li>
        <li>
            <a href="#Academics">Academics</a>
        </li>
        <li>
            <a href="#Personal Info">Personal Info</a>
        </li>
        <li>
            <a href="#Logout">Logout</a>
        </li>
    </ul>

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

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>Name</b></td>
<td align="left"><b>Admission no.</b></td>
<td align="left"><b>Grade 12 marks</b></td>
<td align="left"><b>Sex</b></td>
<td align="left"><b>Date Of Birth</b></td>
<td align="left"><b>Branch</b></td>
<td align="left"><b>Section</b></td>
<td align="left"><b>Roll No.</b></td>
<td align="left"><b>Hostel Block</b></td>
<td align="left"><b>Mess block</b></td>
<td align="left"><b>Mess Roll no</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['Name'] . '</td><td align="left">' . 
$row['Admission_No'] . '</td><td align="left">' .
$row['marks'] . '</td><td align="left">' . 
$row['Sex'] . '</td><td align="left">' .
$row['DOB'] . '</td><td align="left">' .
$row['Branch'] . '</td><td align="left">' . 
$row['Section'] . '</td><td align="left">' .
$row['Roll_No'] . '</td><td align="left">' . 
$row['Hostel_Block'] . '</td><td align="left">' .
$row['Mess_Block'] . '</td><td align="left">' .
$row['Mess_Rollno'] . '</td><td align="left">' ;

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>

</body>

</html>


