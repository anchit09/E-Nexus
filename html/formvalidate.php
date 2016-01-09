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
$category=$_POST['category'];
$subcat=$_POST['subcat'];
$domain=$_POST['domain'];
$head=$_POST['head'];
//$image=$_FILES['image'];
//$backimage=$_FILES['backimage'];
$briefdata=$_POST['briefdata'];
$fulldata=$_POST['fulldata'];

/*$type=$_POST['type'];*/

/* we are now encrypting password while using md5() function */
/*$password=md5($pass);

*/ 
/* Now we will check if username is already in use or not */

/* Now we will write a query to insert user details into database */
$insert_user=mysql_query("INSERT INTO formdata (category,subcategory,domain,headline,briefdata,fulldata) VALUES ('$category', '$subcat','$domain','$head','$briefdata','$fulldata')");
 
if($insert_user)
{ echo "Registration Succesfull"; }
else
{ echo "error in registration".mysql_error(); }
 
/* closing the if else statements */

 
mysql_close($con);
?>