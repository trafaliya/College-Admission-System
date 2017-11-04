<?php
// Get a connection for the database
require_once('C:\Apache24\htdocs\mysqli_connect.php');

// Create a query for the database
$query = "SELECT * FROM student";

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
<td align="left"><b>Section</b></td>
<td align="left"><b>Roll number</b></td>
<td align="left"><b>Room number</b></td>
<td align="left"><b>Sex</b></td>
<td align="left"><b>Hostel block</b></td>
<td align="left"><b>Mess roll number</b></td>
<td align="left"><b>Mess block</b></td>
<td align="left"><b>Date of Birth</b></td>
<td align="left"><b>Branch</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['name'] . '</td><td align="left">' . 
$row['admno'] . '</td><td align="left">' .
$row['marks'] . '</td><td align="left">' . 
$row['section'] . '</td><td align="left">' .
$row['rno'] . '</td><td align="left">' .
$row['room'] . '</td><td align="left">' . 
$row['sex'] . '</td><td align="left">' .
$row['hblock'] . '</td><td align="left">' . 
$row['mrno'] . '</td><td align="left">' .
$row['mblock'] . '</td><td align="left">' .
$row['dob'] . '</td><td align="left">' .
$row['branch'] . '</td><td align="left">';

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