<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />


        
        <style>

        input.MyButton {
            width: 150px;
            padding: 20px;
            cursor: pointer;
            font-weight: bold;
            font-size: 100%;
            background: #3366cc;
            color: #fff;
            border: 1px solid #3366cc;
            border-radius: 10px;
            }

        input.MyButton:hover {
            color: #ffff00;
            background: #000;
            border: 1px solid #fff;
            }
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
    <h1>Congrats, you have been selected!</h1>
    <ul class="nav">
        <li>
            <form>
                <input class="MyButton" type="button" value="Home" onclick="window.location.href='home1.php'" >
            </form>
        </li>
        <li>
    
            <form>
                <input class="MyButton" type="button" value="College info" onclick="window.location.href='collegeinfo.php'" />
            </form>
        </li>
        <li>
          
            <form>
                <input class="MyButton" type="button" value="Personal Info" onclick="window.location.href='enterdetails.html'" />
            </form>
        </li>
        <li>
       
            <form>
                <input class="MyButton" type="button" value="Logout" onclick="window.location.href='index.html'" />
            </form>
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
$row = mysqli_fetch_array($response);
print "<b>Name : </b>" .$row['Name']."<br>";
print "<b>Admission no. : </b>" .$row['Admission_No']."<br>";
print "<b>Grade 12 marks : </b>" .$row['marks']."<br>";
print "<b>Sex : </b>" .$row['Sex']."<br>";
print "<b>Date Of Birth : </b>" .$row['DOB']."<br>";
print "<b>Branch : </b>" .$row['Branch']."<br>";
print "<b>Section : </b>" .$row['Section']."<br>";
print "<b>Roll No. : </b>" .$row['Roll_No']."<br>";
print "<b>Hostel Block : </b>" .$row['Hostel_Block']."<br>";
print "<b>Mess block : </b>" .$row['Mess_Block']."<br>";
print "<b>Mess Roll no : </b>" .$row['Mess_Rollno']."<br>";
/*echo '<table align="left"
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

echo '</table>';*/

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>

</body>
</html>