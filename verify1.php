<?php

$a = $_GET['id'];
require_once('C:\Apache24\htdocs\mysqli_connect.php');

$query = "UPDATE student_college_info set verify=0 WHERE Admission_No = ".$a;

$stmt = mysqli_prepare($dbc, $query);
mysqli_stmt_execute($stmt);

header("Location: user.php"); /* Redirect browser */
       exit();
?>