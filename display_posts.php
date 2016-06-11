<?php

include_once("config.php");

$sql  = "SELECT * FROM posts";
$query_run = mysql_query($sql);

if(! $query_run ) 
{
die('Could not get data: ' . mysql_error());
}

echo "<h1 align='center'><u>My Posts</u></h1>";

while($row = mysql_fetch_assoc($query_run)) 
{
$title  = $row['title'];
$contents  = $row['contents'] ;
$category = $row['category'];
$date = $row['date_posted'];

echo "
<br>
<h2><u>".$title."</u></h2><br>".$contents."<br><h4>".$category."</h4>".$date;
}

?>
