<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

$conn = mysql_connect($db_host, $db_user,$db_password);

mysql_select_db(blog);

if($conn)
{
echo "<b>Connected Successfully</b><br>";
}
else
{
echo "Could not connect";
}

include_once("blog.php");

?>