<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'CO301');
define('DB_USER','root');
define('DB_PASSWORD','Sidd0703');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



function SignIn()
{
    session_start();
    if(!empty($_POST['username']))
    {
        $query = mysql_query("select* from login where username = '$_POST[username]' and password = '$_POST[password]' ");
        $row = mysql_fetch_array($query);
        
        if(!empty($row['username']) and !empty($row['password']))
         { 
            
            $_SESSION['username'] = $row['password']; 
            
            echo "Correctly Logged In"; 
        }
        else
        {
            echo "Entered the wrong password";
        }

    }
}

if(isset($_POST['submit']))
{
	SignIn();
}
?>