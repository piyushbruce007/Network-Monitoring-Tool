<?php

$host="localhost";

$username="root";

$password="";

$db_name="ssn";


$conn = mysql_connect("$host", "$username", "$password");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysql_select_db("$db_name",$conn);

$myusername=$_POST['usr'];

$mypassword=$_POST['pwd'];

$result=mysql_query("select* from login where passwd='$mypassword' AND name='$myusername'");

$count= mysql_fetch_array($result);

if ($count == 1)
{
echo":) :) LOGIN SUCCESS :) :) ";
}
else 
{
echo":( :( AUTHETICATION FAILURE :( :( ";
}

?>
