<?php
$con = mysql_connect('localhost','root','');
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
 
// Select the database to use
mysql_select_db('enexus',$con);
 
/* Now we will store the values submitted by form in variable */
$username=$_POST['uname'];
$password=$_POST['pwd'];
$emailid=$_POST['email'];
$gender=$_POST['gender'];
/*$type=$_POST['type'];*/
$confirm_password=$_POST['cpwd'];
/* we are now encrypting password while using md5() function */
/*$password=md5($pass);

*/ 
/* Now we will check if username is already in use or not */
$queryuser=mysql_query("SELECT * FROM user WHERE uname='$username' ");
$checkuser=mysql_num_rows($queryuser);
if($checkuser != 0)
{ echo "Sorry, ".$username." is already been taken."; }
else {
 
/* now we will check if password and confirm password matched */
if($password != $confirm_password)
{ echo "Password and confirm password fields were not matched"; }
else {
 
/* Now we will write a query to insert user details into database */
$insert_user=mysql_query("INSERT INTO user (uname,pwd,emailid,gender) VALUES ('$username', '$password','$emailid','$gender')");
 
if($insert_user)
{ echo "Registration Succesfull"; }
else
{ echo "error in registration".mysql_error(); }
 
/* closing the if else statements */
}}
 
mysql_close($con);
?>