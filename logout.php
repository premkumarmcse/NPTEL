<?php
//include ('index.php');
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
//
session_start();
$myusername = $_SESSION['myusername'];

//echo '<a href="index.php?myusername='.$myusername.'">check</a>';
// update data in mysql database 

$sql="UPDATE test SET logout_time=NOW() WHERE username='$myusername'";
$result=mysql_query($sql);
// if successfully updated. 
//if($result){
//echo "Successful";
//echo "<BR>";
//echo "<a href='index1.html'>View result</a>";
//}

//else {
//echo "ERROR";
//}
session_destroy();
header("location:index.php");
echo "<script type='text/javascript'>alert('Logged Off!');</script>";
?>