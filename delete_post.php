<?php

include_once("config.php");
$id = $_GET['item'];

$sql = "DELETE FROM posts WHERE id = $id";
$query_run = mysql_query($sql);

if($query_run)
{
	echo "<br><h2>Post Deleted successfully</h2>";
}
else
{
	echo "Could not Delete the post".mysql_error();
}

?>