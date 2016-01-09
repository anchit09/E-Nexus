<?php
 
// Grab User submitted information
$email = $_POST['uname'];
$pass = $_POST['pwd'];
$count=1;
// Connect to the database
$con = mysql_connect('localhost','root','');
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
 
// Select the database to use
mysql_select_db('enexus',$con);
 
$result = mysql_query('SELECT * FROM user');
if (false === $result) {
    echo mysql_error();
}

while($row = mysql_fetch_array($result))
  {
if($row["uname"]==$email && $row["pwd"]==$pass)
  { 
  //header("Location: loginsuccess.php");
  echo "<script>alert('Login Successful!');</script>";
  mysql_close($con);
  $count=0;
  }
  }
  if($count==1)
  {
  // header("Location: loginfailure.php");
   echo "<script>alert('Incorrect Email/Password Combination. Enexus passwords are case sensitive.Please check your CAPS lock key!');</script>";
   mysql_close($con);
  }
 
?>