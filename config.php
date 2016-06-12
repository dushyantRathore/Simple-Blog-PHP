<?php

$host = 'localhost';
$user = 'root';
$password = '';

if(mysql_connect($host, $user, $password))
{
	echo "Connection established";
}
else
{
	echo "Connection Failed";
}

$conn = mysql_select_db(blog);

if($conn)
{
	echo "Connected to database successfully";
}

else
{
	echo "Could not connect to database".mysql_error();
}

include_once("blog_main.php");


?>
